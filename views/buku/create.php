<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */


$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-create">
<div class="jenis-form">
   <div class="box box-primary">
            <div class="box-header with-border">

			<h3><b>Tambah Buku</b></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
   
</div>
