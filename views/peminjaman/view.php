<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */

/*$this->title = $model->id;*/
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
/*$this->params['breadcrumbs'][] = $this->title;*/
?>
<div class="peminjaman-view">
     <div class="box box-primary">
            <div class="box-header with-border">


    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>Sunting', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-trash"></i>Hapus', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('<i class="glyphicon glyphicon-file"></i> Export PDF', ['view-export-pdf', 'id' => $model->id], ['target' => '_blank', 'class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'id_buku',
                'value' => function($data){
                    //data=variabel, ->nama relasi,->nama field
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
        ],
    ]) ?>

</div>
