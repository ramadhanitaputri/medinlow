<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PrestasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="prestasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_prestasi') ?>

    <?= $form->field($model, 'nama_prestasi') ?>

    <?= $form->field($model, 'gambar_prestasi') ?>

    <?= $form->field($model, 'deskripsi_prestasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
