<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lomba */

$this->title = 'Update Lomba: ' . $model->id_lomba;
$this->params['breadcrumbs'][] = ['label' => 'Lombas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_lomba, 'url' => ['view', 'id_lomba' => $model->id_lomba]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lomba-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
