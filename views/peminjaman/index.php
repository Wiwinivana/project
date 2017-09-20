<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peminjaman-index">
    <div class="box box-primary">
            <div class="box-header with-border">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-plus"></i>Tambah Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
         <?= Html::a('<i class="fa fa-print"></i> Export Excel Peminjaman Buku', Yii::$app->request->url.'&export=1', ['class' => 'btn btn-success btn-flat']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' => 'No',
            ],

            [
                'attribute' => 'id_buku',
                'value' => function($data){
                    return $data->idBuku->nama;
                },
            ],

            [
                'attribute' => 'id_user',
                'value' => function($data){
                    return $data->idUser->nama;
                },
            ],   
            'waktu_dipinjam',
            'waktu_pengembalian',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
