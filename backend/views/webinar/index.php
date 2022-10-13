<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WebinarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Webinar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="webinar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Create Webinar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_webinar',
            'kategori_id',
            'nama_webinar',
            'gambar_webinar',
            'deskripsi_webinar:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Webinar $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_webinar' => $model->id_webinar]);
                 }
            ],
        ],
    ]); ?>


</div>
