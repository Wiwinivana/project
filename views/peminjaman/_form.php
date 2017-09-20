<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
use app\models\Buku;
use app\models\Member;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin([
    'layout'=>'horizontal',
    'enableAjaxValidation'=>false,
    'enableClientValidation'=>false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'label' => 'col-sm-2',
            'wrapper' => 'col-sm-4',
            'error' => '',
            'hint' => '',
        ],
    ]
]); ?>

<div class="peminjaman-form">
    <div class="box box-primary">
            <div class="box-header with-border">

    <?php $form->errorSummary($model); ?>

    <?= $form->field($model, 'id_buku')->widget(Select2::classname(), [
    	'data' => Buku::getList(),
    	'options' => ['placeholder' => '--Pilih Jenis Buku--'],
    ]); ?>

    <?= $form->field($model, 'id_user')->widget(Select2::classname(), [

        'data' => Member::getList(),
        'options' => ['placeholder' => '-- Harus Otomatis--'],
    ]); ?>  

    <?= $form->field($model, 'waktu_dipinjam')->widget(
    DatePicker:: className(),[
    'model' => $model,
    'attribute' => 'date'
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            ]
    ]); ?>

    <?= $form->field($model, 'waktu_pengembalian')->widget(DatePicker::className(),[
    'model' => $model,
    'attribute' => 'date'
    'template' => '{addon}{input}',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd',
            ]
    ]); ?>
    

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
