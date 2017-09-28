<?php

namespace app\controllers;

use Yii;
use app\models\Penulis;
use app\models\PenulisSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PenulisController implements the CRUD actions for Penulis model.
 */
class PenulisController extends Controller
{
    /**
     * @inheritdoc
     */
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

    /**
     * Lists all Penulis models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PenulisSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penulis model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Penulis model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Penulis();
       
        if ($model->load(Yii::$app->request->post())) {

            /*FUNGSI UNTUK UPLOAD FOTO*/
            $gambar = UploadedFile::getInstance($model, 'gambar');

            /*NAMA FOTO YG AKAN DISIMPAN DI DATABASE*/
            if($gambar !== null) {
                $model->gambar = $gambar->baseName . Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')) . '.' . $gambar->extension;
            }            

            if($model->save()) {

                /*UPLOAD FOTO KE FOLDER WEB/UPLOADS KETIKA SELESAI MENYIMPAN DATA*/
                if($gambar!==null) {
                    $path = Yii::getAlias('@app').'/web/uploads/';
                    $gambar->saveAs($path.$model->gambar, false);
                }                
                Yii::$app->session->setFlash('success','Data berhasil disimpan.');
                return $this->redirect(['view', 'id' => $model->id]);
            }

            Yii::$app->session->setFlash('error','Data gagal disimpan. Silahkan periksa kembali isian Anda.');

        }

        return $this->render('create', [
            'model' => $model,
        ]);

    }

    /**
     * Updates an existing Penulis model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $gambar_lama = $model->gambar;
        if ($model->load(Yii::$app->request->post()) ) {
            $gambar = UploadedFile::getInstance($model,'gambar');
             if($gambar !== null){
                $model->gambar = $gambar->baseName . Yii::$app->formatter->asTimestamp(date('Y-d-m h:i:s')) . '.' . $gambar->extension;
            } else {
                $model->gambar = $gambar_lama;
            }
            if($model->save()) {
                    if ($gambar!==null) {
                        $path = Yii::getAlias('@app').'/web/uploads/';
                        $gambar->saveAs($path.$model->gambar, false);
                     }
            Yii::$app->session->setFlash('success','Data berhasil disimpan.');
            return $this->redirect(['view', 'id' => $model->id]);
            } 
            Yii::$app->session->setFlash('error','Data gagal disimpan. Silahkan periksa kembali isian Anda.');
        }
            return $this->render('update', [
                'model' => $model,
            ]);
    }

    /**
     * Deletes an existing Penulis model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Penulis model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penulis the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penulis::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

                           
}
