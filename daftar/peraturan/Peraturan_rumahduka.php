<?php
include '../../koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rumah Duka - Kabar Duka Indonesia</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../../assets/img/logo 1.png" rel="icon">
  <link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../../assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../../assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



  <!-- Template Main CSS File -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/style3.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Flexor - v2.3.0
  * Template URL: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <?php include 'header.php' ?>

  <main id="main">
    <div class="daftar-kabarduka">
      <div class="jumbotron">
        <div class="container">
          <center>
            <h1>Peraturan Kerjasama</h1>
            <p><b>Pendaftaran Rumah Duka</b></p>
          </center>
        </div>
      </div>
    </div>

    <!-- with database-->
    <section class="ketentuan" id="ketentuan">
      <div class="container">
        <div data-aos="fade-up" data-aos-delay="100" class="container text-center">
          <h3>Ketentuan </h3>
        </div>
        <div class="peraturan" data-aos="fade-up" data-aos-delay="100">
          <p>
            1. Kerja Sama dikenai biaya sebagai berikut: <br></p>
          <table>
            <tr>
              <td>Biaya Administrasi</td>
              <td> : </td>
              <td>Rp.50.000</td>
            </tr>
            <tr>
              <td>Biaya Daftar User</td>
              <td> : </td>
              <td>Rp.20.000</td>
            </tr>
            <tr>
              <td><b>Total</b></td>
              <td><b> : </b></td>
              <td><b>Rp.70.000</b></td>
            </tr>
          </table> <br>
          <?php
          $no = 2;
          $query = "SELECT * FROM peraturan_rumahduka";
          $hasil = mysqli_query($koneksi, $query);
          while ($row = mysqli_fetch_array($hasil)) {
          ?>

            <p> <?php echo $no++, ". ", $row['peraturan']; ?></p>


          <?php
          }
          ?>
        </div>
      </div>
    </section>
    <!-- end-->

  </main>
  <?php include 'footer.php' ?>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../../assets/vendor/php-email-form/validate.js"></script>
  <script src="../../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="../../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../../assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../../assets/js/main.js"></script>

</body>

</html>