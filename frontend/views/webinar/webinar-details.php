<?php

/** @var yii\web\View $this */

$this->title = 'Webinar-Details-1';
?>

<?php

use yii\helpers\Html;
use frontend\assets\MedinlowAsset;
use yii\helpers\Url;

MedinlowAsset::register($this);
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $this->title ?></title>
  <?php $this->registerCsrfMetaTags() ?>

  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= Url::home() ?>img/favicon.png" rel="icon">
  <link href="<?= Url::home() ?>img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/aos/aos.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <?php $this->head() ?>

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php $this->beginBody() ?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <nav id="navbar" class="navbar">
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="<?= Url::to(['webinar/index']); ?>">Webinar</a></li>
          <li>Detail Webinar</li>
        </ol>
        <h2>Peran Tata Kelola TI di Perusahaan</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="<?= Url::home() ?>img/webinar/webinar1.jpg" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Informasi Webinar</h3>
              <ul>
                <li><strong>Waktu</strong>: Rabu, 14 April 2022</li>
                <li><strong>Pukul</strong>: 14.00 - 16.00</li>
                <li><strong>Tempat</strong>: Cisco Webex</li>
                <li><strong>Link Pendaftaran</strong>: <a href="https//:bit.ly/webinarMEMv2">bit.ly/webinarMEMv2</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <p>
                Sadar atau tidak, peran TI pada suatu perusahaan itu sangat penting, loh! Nah, makanya perusahaan yang baik butuh tata kelola TI yang baik pula. Kupas tuntas dunia kelola TI di perusahaan secara GRATIS, yuk dengan join webinar “Peran Tata Kelola TI di Perusahaan”, bersama IT Consultant, Radityo Priyo Ndaru.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/aos/aos.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>
  <script src="vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

  <?php $this->endBody() ?>

</body>

</html>

<?php $this->endPage() ?>