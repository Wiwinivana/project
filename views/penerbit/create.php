<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Penerbit */

$this->title = 'Tambah Penerbit';
$this->params['breadcrumbs'][] = ['label' => 'Penerbits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

            <div class="box-header with-border">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
