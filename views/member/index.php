<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Member';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">
    <div class="box box-primary">
            <div class="box-header with-border">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Member', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            [
            'class' => 'yii\grid\SerialColumn',
            'header' =>'No',
            ],

            'nama',
            'username',
            'password',
            'role',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
