<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Lomba */

$this->title = 'Create Lomba';
$this->params['breadcrumbs'][] = ['label' => 'Lombas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lomba-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
