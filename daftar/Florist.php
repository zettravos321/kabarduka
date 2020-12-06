<?php
include '../koneksi.php';
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
    <link href="../assets/img/logo 1.png" rel="icon">
    <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">



    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style3.css" rel="stylesheet">


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
                        <h1>Daftar Florist</h1>
                        <p>Daftarkan produk karangan bunga anda, daftarkan toko anda sekarang</p>
                        <a href="#pendaftaran" class="start scrollto">Daftar Sekarang</a>
                    </center>
                </div>
            </div>


            <div class="container pendaftaran" id="pendaftaran">
                <h3 class="text-center">Daftar Florist</h3>
                <form method="POST">
                    <div class="form-group">
                        <label>Nama Florist</label>
                        <input class="form-control" name="nama_florist" />
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" name="id_kota" id="exampleFormControlSelect1">
                            <?php

                            $sql = "select * from tb_mkota";

                            $hasil = mysqli_query($koneksi, $sql);
                            $no = 0;
                            while ($data = mysqli_fetch_array($hasil)) {
                                $no++;
                            ?>
                                <option value="<?php echo $data['id_kota']; ?>"><?php echo $data['nama_kota']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Alamat Florist</label>
                        <input class="form-control" name="alamat_florist" />
                    </div>
                    <div class="form-group">
                        <label>WA Florist</label>
                        <input class="form-control" name="wa_florist" />
                    </div>
                    <div class="form-group">
                        <label>Bank Florist</label>
                        <input class="form-control" name="bank_florist" />
                    </div>
                    <div class="form-group">
                        <label>AC Bank Florist</label>
                        <input class="form-control" name="ac_bank_florist" />
                    </div>
                    <div>
                        <input type="checkbox" id="chkddl" onclick="Enabled(this)" />
                        <label for="chkddl">Saya menyetujui semua <a href="peraturan/peraturan_florist.php">peraturan dan kondisi</a></label>
                    </div>
                    <div class="float-right">
                        <button type="submit" class="button" id="ddl" disabled="disabled">Daftarkan</button>
                    </div>
                    <script>
                        function Enabled(chkddl) {
                            var ddl = document.getElementById("ddl");
                            ddl.disabled = chkddl.checked ? false : true;
                            if (!ddl.disabled) {
                                ddl.focus();
                            }
                        }
                    </script>
            </div>
            </form>
        </div>
        </div>


    </main><!-- End #main -->


    <?php

    $id_kota = @$_POST['id_kota'];
    $nama_florist = @$_POST['nama_florist'];
    $alamat_florist = @$_POST['alamat_florist'];
    $wa_florist = @$_POST['wa_florist'];
    $bank_florist = @$_POST['bank_florist'];
    $ac_bank_florist = @$_POST['ac_bank_florist'];
    $simpan = @$_POST['simpan'];
    if ($simpan) {
        $sql = $koneksi->query("insert into tb_mflorist (id_kota,nama_florist,alamat_florist,wa_florist,bank_florist,ac_bank_florist)
	  values( '$id_kota', '$nama_florist', '$alamat_florist', '$wa_florist', '$bank_florist', '$ac_bank_florist')");
        if ($sql) {
    ?>
            <script type="text/javascript">
                alert("Florist Berhasil didaftarkan. menunggu validasi dari Kabarduka.com");
                window.location.href = "";
            </script>
    <?php
        }
    }
    ?>

    <?php include 'footer.php'; ?>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="../assets/vendor/php-email-form/validate.js"></script>
    <script src="../assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="../assets/vendor/venobox/venobox.min.js"></script>
    <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="../assets/js/main.js"></script>

</body>

</html>