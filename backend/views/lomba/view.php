<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model backend\models\Lomba */

$this->title = $model->id_lomba;
$this->params['breadcrumbs'][] = ['label' => 'Lombas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="container">
<div class="lomba-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <p>
        <?= Html::a('Update', ['update', 'id_lomba' => $model->id_lomba], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_lomba' => $model->id_lomba], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar_lomba, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3', 'width' => '300px']) ?>

    <?= DetailView::widget([ 
        'model' => $model,
        'attributes' => [
            'id_lomba',
            'kategori_id',
            'nama_lomba',
            'gambar_lomba',
            'deskripsi_lomba:ntext',
        ],
    ]) ?>

</div>
</div>