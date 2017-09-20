<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Buku */


$this->params['breadcrumbs'][] = ['label' => 'Buku', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="buku-create">

<div class="row">
      <!-- left column -->
      <div class="col-md-5 col-md-offset-2">
        <!-- general form elements disabled -->
        <div class="box box-warning">
          <div class="box-header">
			<h3><b>Tambah Buku</b></h3>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    </div>
    </div>
    </div>

</div>
