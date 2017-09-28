<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\select2\Select2;
//app itu 
use app\models\Jenis;
use app\models\Penulis;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */
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

    <?php $form->errorSummary($model); ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_jenis')->widget(Select2::classname(), [

    	'data' => Jenis::getList(),
    	'language' => 'de',
    	'options' => ['placeholder' => '--Pilih Jenis Buku--'],
    	'pluginOptions' => [
        	'allowClear' => true
    ],
    ]); ?>
    <?= $form->field($model, 'id_penulis')->widget(Select2::classname(), [
    // 
    'data' => Penulis::getList(),
    'language' => 'de',
    'options' => ['placeholder' => '--Pilih Penulis Buku--'],
    'pluginOptions' => [
    'allowClear' => true
    ],
    ]); ?>
    <?= $form->field($model, 'cover')->fileInput(['maxlength' => true]) ?>

   
    <div class="box-footer">
        <div class="col-sm-offset-2 col-sm-3">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    </div>
    </div>
    </div>
</div>  

    <?php ActiveForm::end(); ?>

</div>
