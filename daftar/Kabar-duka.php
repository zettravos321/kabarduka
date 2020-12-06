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
                        <h1>Daftar Kabar Duka</h1>
                        <p>Beritahu masyarakat kabar duka terbaru yang anda miliki</p>
                        <a href="#pendaftaran" class="start scrollto">Daftar Sekarang</a>
                    </center>
                </div>
            </div>


            <div class="container pendaftaran" id="pendaftaran">
                <h3 class="text-center">Daftar Kabar Duka</h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Rumah Duka</label>
                        <select class="form-control" name="id_rumah_duka" id="exampleFormControlSelect1">
                            <?php

                            $sqlx = "select * from tb_mrumah_duka";

                            $hasilx = mysqli_query($koneksi, $sqlx);
                            
                            while ($tampilx = mysqli_fetch_array($hasilx)) {
                                
                            ?>
                                <option value="<?php echo $tampilx['id_rumah_duka']; ?>"><?php echo $tampilx['id_rumah_duka'], " - ", $tampilx['nama_rumah_duka']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <label>Nama Almarhum</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_almarhum">
                    </div>
                    <label>Foto</label>
                    <div class="form-group">
                        <input type="file" name="foto" id="real-file">
                    </div>
                    <label>Tanggal Lahir</label>
                    <div class="form-group">
                        <input type="date" class="form-control" name="tanggal_lahir">
                    </div>
                    <label>Tanggal Kematian</label>
                    <div class="form-group">
                        <input type="date" class="form-control" name="tanggal_kematian">
                    </div>
                    <label>Alamat</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat">
                    </div>
                    <label>Kontak Keluarga</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="kontak_keluarga">
                    </div>
                    <label>Upacara Kematian</label>
                    <div class="form-group">
                        <input type="date" class="form-control" name="upacara_kematian">
                    </div>
                    <label hidden="true">Status</label>
                    <div hidden="true" class="form-group">
                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                            <option value="Tidak Aktif">Tidak Aktif</option>
                        </select>
                    </div>

                    <div>
                        <input type="checkbox" id="chkddl" onclick="Enabled(this)" />
                        <label for="chkddl">Saya menyetujui semua <a href="peraturan/Peraturan_kabarduka.php">peraturan dan kondisi</a></label>
                    </div>
                    <div class="float-right">
                        <button type="sbmt" class="button" id="ddl" disabled="disabled">Daftarkan</button>
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
                </form>
            </div>
        </div>


    </main><!-- End #main -->

    <?php
    // Include the database configuration file   
    // If file upload form is submitted
    $status = $statusMsg = '';
    if (isset($_POST["sbmt"])) {
        $status = 'error';
        if (!empty($_FILES["foto"]["name"])) {
            // Get file info 
            $fileName = basename($_FILES["foto"]["name"]);
            $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

            // Allow certain file formats 
            $allowTypes = array('jpg', 'png', 'jpeg', 'gif');
            if (in_array($fileType, $allowTypes)) {

                $idrumahduka = $_POST['id_rumah_duka'];
                $nama = $_POST['nama_almarhum'];
                $image = $_FILES['foto']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
                $lahir = $_POST['tanggal_lahir'];
                $kematian = $_POST['tanggal_kematian'];
                $alamat = $_POST['alamat'];
                $kontak = $_POST['kontak_keluarga'];
                $upacara = $_POST['upacara_kematian'];
                $sts = $_POST['status'];

                // Insert image content into database 
                $insert = $koneksi->query("INSERT into tb_almarhum VALUES ('$idalmarhum','$idrumahduka','$nama','$imgContent','$lahir','$kematian','$alamat','$kontak','$upacara','$sts')");

                if ($insert) { ?>
                    <script type="text/javascript">
                        alert("Data Berhasil Disimpan");
                        window.location.href = "../index.php";
                    </script>

    <?php
                }
            }
        }
    }
    // Display status message 
    echo $statusMsg;
    ?>
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