<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Buku;
use app\models\BukuSearch;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class WiwinController extends Controller
{
	  public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionExport()
    {
    	 $PHPExcel = new \PHPExcel();

        $PHPExcel->setActiveSheetIndex();

        $sheet = $PHPExcel->getActiveSheet();

        $sheet->getDefaultStyle()->getAlignment()->setWrapText(true);
        $sheet->getDefaultStyle()->getAlignment()->setVertical(\PHPExcel_Style_Alignment::VERTICAL_CENTER);

        $SetBorderArray = array(
            'borders' => array(
                'allborders' => array(
                    'style' => \PHPExcel_Style_Border::BORDER_THIN
                    )
                )
            );

        $sheet->getColumnDimension('C')->setWidth(10);
        $sheet->getColumnDimension('D')->setWidth(20);
        $sheet->getColumnDimension('E')->setWidth(20);
        $sheet->getColumnDimension('F')->setWidth(20);
        $sheet->getColumnDimension('G')->setWidth(20);

        $sheet->setCellValue('C6', 'No');
        $sheet->setCellValue('D6', 'Nama');
        $sheet->setCellValue('E6', 'Jenis');
        $sheet->setCellValue('F6', 'Cover');
        $sheet->setCellValue('G6', 'Penulis');

        $PHPExcel->getActiveSheet()->setCellValue('A4', 'Data Buku');

         $PHPExcel->getActiveSheet()->mergeCells('A4:G4');

         $sheet->getStyle('A4:G6')->getFont()->setBold(true);
        $sheet->getStyle('A4:G6')->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

        $row = 5;
        $i=1;

        $searchModel = new BukuSearch();

        
            $sheet->setCellValue('C' . $row, $i);
            $sheet->setCellValue('D' . $row, $data->nama);
            $sheet->setCellValue('E' . $row, $data->id_jenis);
            $sheet->setCellValue('F' . $row, $data->cover);
            $sheet->setCellValue('G' . $row, $data->id_penulis);
            $i++;
        }

        $sheet->getStyle('C6:G' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

         $sheet->getStyle('C' . $row)->getAlignment()->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

          $sheet->getStyle('C6:G' . $row)->applyFromArray($setBorderArray);

           $path = 'exports/';
        $filename = time() . '_DataBuku.xlsx';
        $objWriter = \PHPExcel_IOFactory::createWriter($PHPExcel, 'Excel2007');
        $objWriter->save($path.$filename);
        return Yii::$app->getResponse()->redirect($path.$filename);
      
    }

}