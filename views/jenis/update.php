<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jenis */

$this->title = 'Sunting Jenis';
$this->params['breadcrumbs'][] = ['label' => 'Jenis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nama, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="jenis-update">
	
      <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
