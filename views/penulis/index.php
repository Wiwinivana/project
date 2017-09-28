<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PenulisSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penulis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penulis-index">
    <div class="box box-primary">
            <div class="box-header with-border">
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Penulis', ['create'], ['class' => 'btn btn-success']) ?>
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

            [
            'attribute' => 'id_jenis_kelamin',
            'value' => function($data){
                return $data->jenisKelamin->nama;
                },
            ],
            'alamat:ntext',
            'lat',
            'lng',
            // 'gambar',
            [
                'attribute' => 'gambar',
                'format' => 'raw',
                'value' => function($data){
                    return $data->getGambar(['style'=>'width:100px']);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],

        ],
    ]); ?>
</div>
