<?php

/** @var yii\web\View $this */

$this->title = 'MEDINLOW';
?>

<?php

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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Website Media Informasi Lomba & Webinar</h1>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="<?= Url::to(['event']); ?>" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Yuk Cari!</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= Url::home() ?>img/features-2.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Values Section ======= -->
    <section id="values" class="values">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Cari Informasi Lomba & Webinar Disini!</p>
        </header>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?= Url::home() ?>/img/values-1.png" class="img-fluid" alt="">
              <a href="<?= Url::to(['lomba/index']); ?>"><h3>Lomba</h3></a>
              <p>"Kemenangan selalu mungkin bagi orang yang menolak untuk berhenti berjuang." -Napoleon Hill</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <img src="<?= Url::home() ?>/img/values-2.png" class="img-fluid" alt="">
              <a href="<?= Url::to(['webinar/index']); ?>"><h3>Webinar</h3></a>
              <p>"Relasi itu seperti bunga yang membutuhkan air, bisa kering dan mati tanpa komunikasi."</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
            <div class="box">
              <img src="<?= Url::home() ?>/img/values-3.png" class="img-fluid" alt="">
              <a href="<?= Url::to(['prestasi/index']); ?>"><h3>Prestasi</h3></a>
              <p>"Latihan bukan untuk menyempurnakan, tapi untuk menjadikannya permanen." -Aristoteles</p>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Values Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Sedikit Memori</p>
        </header>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Prestasi</li>
              <li data-filter=".filter-card">Kegiatan</li>
            </ul>
          </div>
        </div>

        <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/lomba1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kompetisi Penganugrahan Inovasi Teknologi Tahun 2020</h4>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/lomba1.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kompetisi Penganugrahan Inovasi Teknologi Tahun 2020"><i class="bi bi-plus"></i></a>
                  <a href="https://it.la.psdku.pens.ac.id/index.php/2021/07/18/tiga-mahasiswa-pens-psdku-lamongan-meraih-juara-2-dalam-penganugrahan-inovasi-teknologi-lamongan-tahun-2020/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/sosialisasi1.png" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi Tanaman Obat Keluarga (TOGA) dengan Virtual Reality (VR)</h4>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/sosialisasi1.png" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sosialisasi Tanaman Obat Keluarga (TOGA) dengan Virtual Reality (VR) "><i class="bi bi-plus"></i></a>
                  <a href="https://www.pens.ac.id/2021/09/18/sebagai-bentuk-pengabdian-terhadap-masyarakat-psdku-lamongan-pens-sukses-gelar-sosialisasi/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/lomba2.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lomba Inovasi Digital Mahasiswa (LIDM) Tahun 2021</h4>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/lomba2.jpeg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lomba Inovasi Digital Mahasiswa (LIDM) Tahun 2021"><i class="bi bi-plus"></i></a>
                  <a href="https://www.pens.ac.id/2021/09/20/empat-mahasiswa-psdku-lamongan-pens-berhasil-memasuki-babak-final-lidm-2021/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/lomba4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Kompetisi Public Health Event Competition Indonesia (PHECI) 2022</h4>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/lomba4.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Kompetisi Public Health Event Competition Indonesia (PHECI) 2022"><i class="bi bi-plus"></i></a>
                  <a href="https://www.instagram.com/p/Ccu3MicLTJp/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/lomba3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Lomba Reels Video Challenge APBN (Anggaran Pendapatan dan Belanja Negara) Tahun 2022</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/lomba3.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Lomba Reels Video Challenge APBN (Anggaran Pendapatan dan Belanja Negara) Tahun 2022"><i class="bi bi-plus"></i></a>
                  <a href="https://www.instagram.com/p/CayvFPbF903/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="<?= Url::home() ?>img/prestasi/sosialisasi2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Sosialisasi Media Pembelajaran Permainan Edukasi Dual Bahasa Berbasis Game Edukasi Tentang Tanaman Obat Keluarga</h4>
                <div class="portfolio-links">
                  <a href="<?= Url::home() ?>img/prestasi/sosialisasi2.jpg" data-gallery="portfolioGallery" class="portfokio-lightbox" title="Sosialisasi Media Pembelajaran Permainan Edukasi Dual Bahasa Berbasis Game Edukasi Tentang Tanaman Obat Keluarga"><i class="bi bi-plus"></i></a>
                  <a href="https://www.instagram.com/p/CeXYRWWJO7i/" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">

      <div class="container" data-aos="fade-up">

        <header class="section-header">
          <p>Kontak Kami</p>
        </header>

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Jl. Panglima Sudirman No. 125, Lamongan, Jawa Timur 62212</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+62 85334 312475<br>+62 85843 510263</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>medinlow@gmail.com<br>ramadhanitaputri08@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>8:00 AM - 4:30 PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>

          </div>

        </div>

      </div>

    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>MEDINLOW</span>
            </a> <br>
            <p>Platform yang membantu menyediakan informasi terbaru untuk mahasiswa terkait lomba dan webinar yang diselenggarakan oleh suatu lembaga atau organisasi.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= Url::to(['event']); ?>">Event</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= Url::to(['portofolio']); ?>">Portofolio</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="<?= Url::to(['contact']); ?>">Contact</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              Jl. Panglima Sudirman N0. 125,<br>
              Lamongan, Jawa Timur 62212<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 85843 510263<br>
              <strong>Email:</strong> ramadhanitaputri08@gmail.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>MEDINLOW</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">Ramadhanita Putri</a> <br><br><br>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

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