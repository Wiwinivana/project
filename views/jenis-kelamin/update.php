<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\JenisKelamin */

$this->title = 'Update Jenis Kelamin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Jenis Kelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-kelamin-update">
	 <div class="box box-primary">
            <div class="box-header with-border">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
