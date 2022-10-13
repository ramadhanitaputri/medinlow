<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>

<div class="site-index">
    <div class="body-content">
    	<div class="row">
            <div class="top_tiles">
              <div class="animated flipInY col-lg-4 col-md-2 col-sm-3 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-pencil-square-o"></i></div>
                  <div class="count">5</div>
                  	<h3><a href="<?= Url::to(['lomba/index'])?>">Data Lomba</a></h3>
                  <br>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-2 col-sm-3 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-laptop"></i></div>
                  <div class="count">3</div>
                  	<h3><a href="<?= Url::to(['webinar/index'])?>">Data Webinar</a></h3>
                  <br>
                </div>
              </div>
              <div class="animated flipInY col-lg-4 col-md-2 col-sm-3 ">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-files-o"></i></div>
                  <div class="count">3</div>
            		<h3><a href="<?= Url::to(['prestasi/index'])?>">Data Prestasi</a></h3>
                  <br>
                </div>
              </div>
            </div>
          </div>

    </div>
</div>
