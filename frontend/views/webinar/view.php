<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Webinar */

$this->title = $model->id_webinar;
$this->params['breadcrumbs'][] = ['label' => 'Webinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="webinar-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
