<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\KategoriWebinar */

$this->title = 'Create Kategori Webinar';
$this->params['breadcrumbs'][] = ['label' => 'Kategori Webinars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kategori-webinar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
