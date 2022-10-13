<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Webinar */

$this->title = 'Update Webinar: ' . $model->id_webinar;
$this->params['breadcrumbs'][] = ['label' => 'Webinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_webinar, 'url' => ['view', 'id_webinar' => $model->id_webinar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="webinar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
