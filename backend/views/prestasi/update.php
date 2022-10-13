<?php

use yii\helpers\Html;
use common\widgets\Alert;
use yii\widgets\Breadcrumbs;

/* @var $this yii\web\View */
/* @var $model backend\models\Prestasi */

$this->title = 'Update Prestasi: ' . $model->id_prestasi;
$this->params['breadcrumbs'][] = ['label' => 'Prestasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_prestasi, 'url' => ['view', 'id_prestasi' => $model->id_prestasi]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="prestasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
