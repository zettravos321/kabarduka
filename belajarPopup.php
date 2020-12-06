<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
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

    <div class="container">
        <div class="info-baru text-center">
            <?php
            $no = 1;
            $sql4 = $koneksi->query("SELECT * from tb_almarhum WHERE id_almarhum ORDER BY id_almarhum DESC LIMIT 4");
            while ($row = $sql4->fetch_assoc()) {
                if ($row['status'] == "Aktif") {
                    echo '<a data-toggle="modal" data-target="#a' . $row['id_almarhum'] . '" style="cursor: pointer;"><img src = "data:image/jpg;base64,' . base64_encode($row['foto']) . '" alt="Image" style="width: 200px; height:200px; margin: 20px;" ></a>';
            ?>

                    <!-- The Modal -->
                    <div class="modal fade" id="a<?php echo $row['id_almarhum'] ?>">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title"><?php echo $row['nama_almarhum'] ?></h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body -->
                                <div class="modal-body text-center">
                                    <i><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($row['foto']) . '" alt="Image" style="width: 100px; height:100px;" >'; ?></i>
                                    <p>Tanggal Lahir</p>
                                    <h4><?php echo $row['tanggal_lahir']; ?></h4>
                                    <p>Tanggal Kematian</p>
                                    <h4><?php echo $row['tanggal_kematian']; ?></h4>
                                    <p>Alamat</p>
                                    <h4><?php echo $row['alamat']; ?></h4>
                                    <p>Kontak Keluarga</p>
                                    <h4><?php echo $row['kontak_keluarga']; ?></h4>
                                    <p>Upacara Kematian</p>
                                    <h4><?php echo $row['upacara_kematian']; ?></h4>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>


    <?php include 'footer.php'; ?>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>