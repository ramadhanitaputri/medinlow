<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn; 
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\WebinarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Webinars';

?>
<div class="webinar-index">

    <div class="body-content">

        <div class="row">
            <?php 
                foreach ($model->webinars as $webinar) {
                    ?>
                        <div class="col-lg-4">
                            <?= Html::img('@web/uploads/' . $webinar->gambar_webinar, ['class' => 'img-thumbnail rounded mb-3', 'width' => '100%'])?>

                            <h2><?= $webinar->nama_webinar ?></h2>

                            <p><?= $webinar->deskripsi_webinar ?></p>

                            <p><a class="btn btn-success" href="<?= Url::to(['webinar/webinar-details']); ?>">Lihat Selengkapnya</a></p>
                        </div>
                    <?php
                }
            ?>
            
        </div>

    </div>

</div>
