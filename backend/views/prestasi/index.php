<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView; 
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PrestasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prestasi';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
<div class="prestasi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Create Prestasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_prestasi',
            'nama_prestasi',
            'gambar_prestasi',
            'deskripsi_prestasi:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Prestasi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_prestasi' => $model->id_prestasi]);
                 }
            ],
        ],
    ]); ?>


</div>
</div>