<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use app\models\Buku;
use app\models\Member;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'id_buku')->widget(Select2::classname(), [
    	'data' => Buku::getList(),
    	'options' => ['placeholder' => '--Pilih Jenis Buku--'],
    ]); ?>

    <?= $form->field($model, 'id_user')->widget(Select2::classname(), [

        'data' => Member::getList(),
        'options' => ['placeholder' => '-- Harus Otomatis--'],
    ]); ?>

    

    <?= $form->field($model, 'waktu_dipinjam')->widget(DatePicker:: className(),[]) ?>

    <?= $form->field($model, 'waktu_pengembalian')->widget(DatePicker::className(),[]) ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>


    <?php ActiveForm::end(); ?>

</div>
