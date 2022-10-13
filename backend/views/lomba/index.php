<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LombaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lomba';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lomba-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Create Lomba', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_lomba',
            'kategori_id',
            'nama_lomba',
            'gambar_lomba',
            'deskripsi_lomba:ntext',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, backend\models\Lomba $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_lomba' => $model->id_lomba]);
                 }
            ],
        ],
    ]); ?>


</div>
