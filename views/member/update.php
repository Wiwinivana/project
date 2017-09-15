<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Member */

$this->title = 'Update Member: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Members', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="member-update">
	 <div class="box box-primary">
            <div class="box-header with-border">


    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
