<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Buku;

/* @var $this yii\web\View */
/* @var $model app\models\Jenis */

$this->title = $model->nama;
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jenis-view">
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
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama',
        ],
    ]) ?>

</div>

<table class="table table-bordered table-hover table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Cover</th>
            <th>Penulis</th>
        </tr>
    </thead>
    <tr>
    <?php
        $i=1;
        //menampilkan buku yg dimana id_penulisnya sama id dr yg di view
        foreach (Buku::find()->where(['id_jenis' => $model->id])->all() as $data) { ?>
        <td><?= $i; ?></td>
        <td><?= $data->nama ?></td>
        <td><?= $data->jenis->nama;?></td>
        <td><?= $data->cover?></td>
        <td><?= $data->penulis->nama;?></td>
    </tr>
<?php $i++; } ?>
    
</table>
<?php

?>
