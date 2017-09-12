<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Buku */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-view">

    <h1>Detail Buku</h1>

    <p>
        <?= Html::a('<i class="glyphicon glyphicon-pencil"></i>Sunting Buku', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('<i class="glyphicon glyphicon-list"></i>Daftar Buku', ['buku/index', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        
    </p>

    <?= DetailView::widget([     
        'model' => $model,
        'attributes' => [
            
            'nama',
            [
                'attribute' => 'id_jenis',
                'value' => function($data){
                    //data=variabel, ->nama relasi,->nama field
                    return $data->jenis->nama;
                },
            ],
           'cover',
            
            [
                'attribute' => 'id_penulis',
                'value' => function($data){
                    //data=variabel, ->nama relasi,->nama field
                    return $data->penulis->nama;
                },
             ],
            ],
    ]); ?>

</div>
