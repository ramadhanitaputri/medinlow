<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model backend\models\Prestasi */

$this->title = $model->id_prestasi;
$this->params['breadcrumbs'][] = ['label' => 'Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container">
<div class="prestasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id_prestasi' => $model->id_prestasi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_prestasi' => $model->id_prestasi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar_prestasi, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3', 'width' => '300px']) ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_prestasi',
            'nama_prestasi',
            'gambar_prestasi',
            'deskripsi_prestasi:ntext',
        ],
    ]) ?>

</div>
</div>