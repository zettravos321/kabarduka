<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/aria/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/aria/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/aria/styles.css">
    <link rel="stylesheet" href="assets/css/coba.css">

</head>

<body>
    <!-- Projects -->
    <div id="projects" class="filter">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-ld-8">
                    <?php
                    $no = 1;
                    $sql4 = $koneksi->query("SELECT * from tb_almarhum WHERE id_almarhum ORDER BY id_almarhum DESC LIMIT 4");
                    while ($row = $sql4->fetch_assoc()) {
                        if ($row['status'] == "Aktif") {
                    ?>
                            <div class="element-item">
                                <a class="popup-with-move-anim" href="#a<?php echo $row['id_almarhum'] ?>">
                                    <div class="element-item-overlay"><span>
                                            <p><?php echo $row['nama_almarhum'] ?></p>
                                        </span></div><img src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" alt="alternative">
                                </a>
                            </div>

                            <!-- Lightbox -->
                            <div id="a<?php echo $row['id_almarhum'] ?>" class="lb lightbox-basic zoom-anim-dialog mfp-hide">
                                <div class="row">
                                    <button title="Close (Esc)" type="button" class="mfp-close x-button" style="margin-right: 4px;"> × </button>
                                    <div class="col-lg-4">
                                        <img class="img-fluid" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']) ?>" style="width: 200px; height: 200px;" alt="alternative">
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

                                        <a class="btn-solid-reg" href="daftar/kirim-bunga.php">Kirim Bunga</a> <a class="btn-outline-reg mfp-close as-button" href="#projects">BACK</a>
                                    </div> <!-- end of col -->
                                </div> <!-- end of row -->
                            </div> <!-- end of lightbox-basic -->
                            <!-- end of lightbox -->
                    <?php
                        }
                    }

                    ?>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </div>
    <!-- end of Projects -->
    <!-- Scripts -->
    <script src="assets/vendor/aria/js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="assets/vendor/aria/js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="assets/vendor/aria/js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="assets/vendor/aria/js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="assets/vendor/aria/js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="assets/vendor/aria/js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="assets/vendor/aria/js/scripts.js"></script> <!-- Custom scripts -->
</body>

</html>