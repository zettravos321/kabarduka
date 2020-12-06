<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kabar Duka Indonesia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link href="assets/img/logo 1.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css>">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/styleList.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <main id="main">
        <div class="daftar-kabarduka">
            <div class="jumbotron">
                <center>
                    <h1>List Rumah Duka</h1>

                    <p><b>Kabarduka.com</b></p>
                </center>
            </div>
        </div>

        <!-- Button to Open the Modal 
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Open modal
  </button>-->
        <main>
            <div class="container">
                <center>
                <h3>List Rumah Duka Di Indonesia</h3>
                </center>
                <br>
                <div class="table-responsive">
                    <table id="tabel-data" class="table table-borderless" data-paging="false" data-searching="true" data-ordering="false">
                        <thead>
                            <tr>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Nama Rumah Duka</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>
                                <th>Provinsi</th>
                                <th>Kota</th>
                                <th>Nama Rumah Duka</th>
                                <th></th>
                            </tr>
                            <?php
                            $query = "SELECT * FROM tb_mrumah_duka JOIN tb_mkota ON tb_mrumah_duka.id_kota = tb_mkota.id_kota JOIN tb_mprovinsi ON tb_mkota.id_provinsi = tb_mprovinsi.id_provinsi";
                            $query_run = mysqli_query($koneksi, $query);
                            while ($row = mysqli_fetch_array($query_run)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['nama_provinsi'] ?></td>
                                    <td><?php echo $row['nama_kota'] ?></td>
                                    <td><?php echo $row['nama_rumah_duka'] ?></td>
                                    <td><button type="button" class="btn btntb" data-toggle="modal" data-target="#a<?php echo $row['id_rumah_duka'] ?>">Lihat</button></td>
                                </tr>

                                <!-- The Modal -->
                                <div class="modal fade" id="a<?php echo $row['id_rumah_duka'] ?>">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h3 class="modal-title"><?php echo $row['nama_rumah_duka'] ?></h3>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                <center>
                                                    <p>Nama Rumah Duka</p>
                                                    <h4><?php echo $row['nama_rumah_duka'] ?></h4>
                                                    <p>Alamat</p>
                                                    <h4><?php echo $row['alamat_rumah_duka'] ?></h4>
                                                    <p>No. Telp</p>
                                                    <h4><?php echo $row['telp_rumah_duka'] ?></h4>
                                                    <p>No. Whatsapp</p>
                                                    <h4><?php echo $row['wa_rumah_duka'] ?></h4>
                                                </center>
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btntb" data-dismiss="modal">Close</button>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <section class="daftar">
                    <div class="container" data-aos="fade-up" data-aos-delay="200">
                        <p>Mendaftarkan rumah duka? <b>Daftar disini!</b></p>
                        <a href="daftar/rumah-duka.php" class="more-btn">Daftar Sekarang<i class="bx bx-chevron-right"></i></a>
                    </div>
                </section>
            </div>
        </main>
        <?php include 'footer.php'; ?>

        <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/ddtf.js"></script>
        <script>
            $(document).ready(function() {
                $('#tabel-data').DataTable({
                    "info": false
                });
            });
            $('#tabel-data').ddTableFilter(); 
        </script>

</body>

</html>