<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\LombaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lombas';

?>
<div class="lomba-index">

    <div class="body-content">

        <div class="row">
            <?php 
                foreach ($model->lombas as $lomba) {
                    ?>
                        <div class="col-lg-4">
                            <?= Html::img('@web/uploads/' . $lomba->gambar_lomba, ['class' => 'img-thumbnail rounded mb-3', 'width' => '100%'])?>

                            <h2><?= $lomba->nama_lomba ?></h2>

                            <p><?= $lomba->deskripsi_lomba ?></p>

                            <p><a class="btn btn-success" href="<?= Url::to(['lomba/lomba-details']); ?>">Lihat Selengkapnya</a></p>
                        </div>
                    <?php
                }
            ?>
            
        </div>

    </div>
    
</div>