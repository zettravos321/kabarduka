<?php
include 'koneksi.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rumah Duka - Kabar Duka Indonesia</title>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo 1.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/vendor/aria/fontawesome-all.css">
  <link rel="stylesheet" href="assets/vendor/aria/magnific-popup.css">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">




  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

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
          <h1>List Almarhum</h1>

          <p><b>Kabarduka.com</b></p>
        </center>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="50" class="text-center">
      <br>
      <h1>List Rumah Duka di Indonesia</h1>
    </div>

    <!--Table-->
    <div class="container">
        <div class="tb-alm table-responsive">
            <table align="center" id="table-data" class="table table-borderless" data-paging="true" data-searching="true" data-ordering="false">
                <thead>
                    <tr>
                        <th> Foto </th>
                        <th> Nama Almarhum </th>
                        <th> Tanggal Kematian </th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql4 = $koneksi->query("SELECT * from tb_almarhum");
                    while ($row = $sql4->fetch_assoc()) {
                        if ($row['status'] == "Aktif") {
                    ?>
                            <tr>
                                <td><img src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" style="width: 200px; height: 200px;" alt="alternative"></td>
                                <td><?php echo $row['nama_almarhum'] ?></td>
                                <td><?php echo $row['tanggal_kematian']; ?></td>
                                <td><a class="popup-with-move-anim" href="#a<?php echo $row['id_almarhum'] ?>"><button type="button" class="button btn btn-info btn-lg">Detail</button></a></td>
                            </tr>
                            <!-- Lightbox -->
                            <div id="a<?php echo $row['id_almarhum'] ?>" class="lb lightbox-basic zoom-anim-dialog mfp-hide">
                                <div class="row">
                                    <button title="Close (Esc)" type="button" class="mfp-close x-button" style="margin-right: 4px;"> × </button>
                                    <div class="col-lg-4 text-center">
                                        <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" style="width: 250px; height: 200px;" alt="alternative">
                                    </div> <!-- end of col -->
                                    <div class="col-lg-2"></div>
                                    <div class="col-lg-6">
                                        <h3><?php echo $row['nama_almarhum'] ?></h3>
                                        <hr class="line-heading">
                                        <h6>Tanggal Lahir</h6>
                                        <p><?php echo $row['tanggal_lahir'] ?></p>
                                        <h6>Tanggal Kematian</h6>
                                        <p><?php echo $row['tanggal_kematian'] ?></p>
                                        <h6>Alamat</h6>
                                        <p><?php echo $row['alamat'] ?></p>
                                        <h6>Kontak Keluarga</h6>
                                        <p><?php echo $row['kontak_keluarga'] ?></p>
                                        <h6>Upacara Kematian</h6>
                                        <p><?php echo $row['upacara_kematian'] ?></p>

                                        <a class="button btn-solid-reg" style="float: right;" href="daftar/kirim-bunga.php">Kirim Bunga</a>
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of lightbox-basic -->
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--Table End-->

    <section class="daftar">
      <div class="container" data-aos="fade-up" data-aos-delay="200">
        <p>Ingin menberikan info kabar duka/almarhum? <b>Daftar disini!</b></p>
        <a href="daftar/kabar-duka.php" class="more-btn">Daftar Sekarang<i class="bx bx-chevron-right"></i></a>
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

  <script src="assets/vendor/aria/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
  <script src="assets/vendor/aria/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
  <script src="assets/vendor/aria/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
  <script src="assets/vendor/aria/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->


  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/vendor/aria/js/scripts.js"></script> <!-- Custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#table-data').DataTable();
    });
  </script>
</body>

</html>