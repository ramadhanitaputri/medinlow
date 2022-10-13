<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PrestasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Prestasis';

?>
<div class="prestasi-index">

    <div class="body-content">

        <div class="row">
            <?php 
                foreach ($model->prestasis as $prestasi) {
                    ?>
                        <div class="col-lg-4">
                            <?= Html::img('@web/uploads/' . $prestasi->gambar_prestasi, ['class' => 'img-thumbnail rounded mb-3', 'width' => '100%'])?>

                            <h2><?= $prestasi->nama_prestasi ?></h2>

                            <p><?= $prestasi->deskripsi_prestasi ?></p>

                            <p><a class="btn btn-success" href="https://it.la.psdku.pens.ac.id/index.php/2021/07/18/tiga-mahasiswa-pens-psdku-lamongan-meraih-juara-2-dalam-penganugrahan-inovasi-teknologi-lamongan-tahun-2020/">Lihat Selengkapnya</a></p>
                        </div>
                    <?php
                }
            ?>
            
        </div>

    </div>

</div>
