<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us - Kabar Duka Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="assets/js/parallax.js"></script>

  <!-- Favicons -->
  <link href="assets/img/logo 1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/style2.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php include 'header.php'; ?>

  <main id="main">
    <div class="daftar-kabarduka">
      <div class="jumbotron">
        <center>
          <h1>About Us</h1>

          <p><b>Kabarduka.com</b></p>
        </center>
      </div>
    </div>

    <!-- Title -->
    <section id="title">
      <div class="container col-md-12 text-center" data-aos="fade-in">
        <h1>Kabar Duka</h1>
        <hr>
        <h5>Tentang Kami</h5>
      </div>
    </section>

    <!-- Visi Misi -->
    <section id="visi-misi" class="visi-misi" data-aos="fade-up" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="info-box">
              <div class="profil" id="profil">
                <div class="logo text-center">
                  <h3>Profil Institusi</h3>
                  <i><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($tampil['logo']) . '" alt="Image" style="width: 150px; height:150px;" >'; ?></i>
                  <p style="font-size: smaller;">Logo Institusi</p>
                </div>
                <p><b>Nama Institusi</b> : <?php echo $tampil2['nama']; ?></p>
                <p><b>Alamat</b> : <?php echo $tampil2['alamat']; ?></p>
                <p><b>Pimpinan</b> : <?php echo $tampil2['pimpinan']; ?></p>
                <p><b>Tanggal Berdiri</b> : <?php echo $tampil2['tanggal_berdiri']; ?></p>
                <p><b>Situs</b> : <a href="index.php"><?php echo $tampil2['situs']; ?></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-6" id="visi">
                <h3>Visi</h3>
                <p>
                  <?php
                  echo $tampil['visi'];
                  ?>
                </p>
              </div>
              <div class="col-md-6">
                <h3>Misi</h3>
                <p>
                  <?php
                  echo $tampil['misi'];
                  ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Visi Misi-->

    <!-- Sejarah -->
    <section class="sejarah" id="sejarah">
      <div class="container">
        <div class="row">
          <div data-aos="fade-up" data-aos-delay="100">
            <h3>Sejarah</h3>
            <hr>
          </div>
          <p data-aos="fade-up" data-aos-delay="150">
            <?php
            echo $tampil['sejarah'];
            ?>
          </p>
        </div>
      </div>

    </section>

  </main><!-- End #main -->

  <?php include 'footer.php'; ?>
  
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>