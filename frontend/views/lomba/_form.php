<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lomba */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lomba-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kategori_id')->textInput() ?>

    <?= $form->field($model, 'nama_lomba')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gambar_lomba')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_lomba')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
