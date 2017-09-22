<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\BukuSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Buku';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-index">
    <div class="box box-primary">
            <div class="box-header with-border">

    
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Buku', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('<i class="fa fa-print"></i> Export Data Buku', ['Wiwin/export'], ['class' => 'btn btn-success btn-flat']) ?>
         <?= Html::a('<i class="glyphicon glyphicon-search"></i>Cari Buku', ['pencarian'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            
            'nama',

            //cara pertama 
            [
                'attribute' => 'id_jenis',
                'value' => function($data){
                    return $data->getRelationField('jenis','nama');
                },
            ],

            'cover',

            //cara kedua
            [
                'attribute' => 'id_penulis',
                'value' => function($data){
                    //data=variabel, ->nama relasi,->nama field
                    return $data->penulis->nama;
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
