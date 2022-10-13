<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WebinarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="webinar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_webinar') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?= $form->field($model, 'nama_webinar') ?>

    <?= $form->field($model, 'gambar_webinar') ?>

    <?= $form->field($model, 'deskripsi_webinar') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>