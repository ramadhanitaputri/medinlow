<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Lomba */
/* @var $form yii\widgets\ActiveForm */
?> 

<div class="lomba-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= Html::img('../../../frontend/web/uploads/' . $model->gambar_lomba, ['class' => 'img-thumbnail rounded mx-auto d-block mb-3 mt-5', 'width' => '300px']) ?>

    <?= $form->field($model, 'kategori_id')->textInput() ?>

    <?= $form->field($model, 'nama_lomba')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'file_upload')->fileInput() ?>

    <?= $form->field($model, 'deskripsi_lomba')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
