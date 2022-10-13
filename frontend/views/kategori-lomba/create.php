<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriLomba */

$this->title = 'Create Kategori Lomba';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Lombas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-lomba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
