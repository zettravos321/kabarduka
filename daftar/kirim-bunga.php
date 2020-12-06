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
                        <a href="#pendaftaran" class="start">Daftar Sekarang</a>
                    </center>
                </div>
            </div>
            </nav>

            <div class="container pendaftaran" id="pendaftaran">
                <h3 class="text-center">Daftar Kabar Duka</h3>
                <form method="post" enctype="multipart/form-data">
                    <label>Nama Pengirim</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nama_pengirim">
                    </div>
                    <div class="form-group">
                        <label>No. Hp Pengirim</label>
                        <input class="form-control" name="no_hp_pengirim" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Pengirim</label>
                        <input class="form-control" name="alamat_pengirim" />
                    </div>
                    <div class="form-group">
                        <label>Nama Almarhum</label>
                        <input class="form-control" name="nama_pengirim" />
                    </div>
                    <div class="form-group">
                        <label>Alamat Penerima</label>
                        <input class="form-control" name="alamat_penerima" />
                    </div>
                    <div class="form-group">
                        <label>Kontak Keluarga </label>
                        <input class="form-control" name="alamat_penerima" />
                    </div>
                    <div class="form-group">
                        <label>Kota</label>
                        <select class="form-control" name="kota" id="kota">
                            <option value="">Pilih Kota</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Florist</label>
                        <select class="form-control" name="florist" id="florist">
                            <option value="">Pilih Florist</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Jenis Produk Bunga</label>
                        <select class="form-control" name="produk" id="produk">
                            <option value="">Pilih Produk</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Kalimat ucapan</label>
                        <input type="text" class="form-control" name="kalimat" />
                    </div>

                    <div>
                        <input type="checkbox" id="chkddl" onclick="Enabled(this)" />
                        <label for="chkddl">Semua data sudah benar terisi</a></label>
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
                </form>
            </div>
        </div>
        <hr>
        </div>
    </main><!-- End #main -->

    <?php
    // Include the database configuration file   
    // If file upload form is submitted
    $status = $statusMsg = '';
    if (isset($_POST["submit"])) {
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

                // Insert image content into database 
                $insert = $koneksi->query("INSERT into tb_almarhum VALUES ('$idalmarhum','$idrumahduka','$nama','$imgContent','$lahir','$kematian','$alamat','$kontak','$upacara')");

                if ($insert) { ?>
                    <script type="text/javascript">
                        alert("kabar duka berhasil didaftarkan. menunggu validasi dari admin");
                        window.location.href = "";
                    </script>

    <?php
                }
            }
        }
    }
    // Display status message 
    echo $statusMsg;
    ?>
<?php include 'footer.php' ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: "get_kota.php",
                cache: false,
                success: function(msg) {
                    $("#kota").html(msg);
                }
            });

            $("#kota").change(function() {
                var kota = $("#kota").val();
                $.ajax({
                    type: 'POST',
                    url: "get_florist.php",
                    data: {
                        kota: kota
                    },
                    cache: false,
                    success: function(msg) {
                        $("#florist").html(msg);
                    }
                });
            });

            $("#florist").change(function() {
                var florist = $("#florist").val();
                $.ajax({
                    type: 'POST',
                    url: "get_produk.php",
                    data: {
                        florist: florist
                    },
                    cache: false,
                    success: function(msg) {
                        $("#produk").html(msg);
                    }
                });
            });

            $("#kecamatan").change(function() {
                var kecamatan = $("#kecamatan").val();
                $.ajax({
                    type: 'POST',
                    url: "get_kelurahan.php",
                    data: {
                        kecamatan: kecamatan
                    },
                    cache: false,
                    success: function(msg) {
                        $("#kelurahan").html(msg);
                    }
                });
            });
        });
    </script>

</body>

</html>