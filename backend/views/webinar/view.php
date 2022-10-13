<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model backend\models\Webinar */

$this->title = $model->id_webinar;
$this->params['breadcrumbs'][] = ['label' => 'Webinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
<div class="webinar-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id_webinar' => $model->id_webinar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_webinar' => $model->id_webinar], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar_webinar, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3', 'width' => '300px']) ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_webinar',
            'kategori_id',
            'nama_webinar',
            'gambar_webinar',
            'deskripsi_webinar:ntext',
        ],
    ]) ?>

</div>
</div>