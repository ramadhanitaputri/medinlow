<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lomba */

$this->title = $model->id_lomba;
$this->params['breadcrumbs'][] = ['label' => 'Lombas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="lomba-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
