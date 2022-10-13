<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LombaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lomba-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_lomba') ?>

    <?= $form->field($model, 'kategori_id') ?>

    <?= $form->field($model, 'nama_lomba') ?>

    <?= $form->field($model, 'gambar_lomba') ?>

    <?= $form->field($model, 'deskripsi_lomba') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
