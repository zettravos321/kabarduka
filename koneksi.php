<?php
 $koneksi = mysqli_connect("localhost", "root", "", "rumah-duka");

 $sql = $koneksi->query("select * from tb_about_us");
$tampil = $sql->fetch_assoc();

$sql2 = $koneksi->query("select * from tb_profile");
$tampil2 = $sql2->fetch_assoc();

$sql3 = $koneksi->query("select * from tb_contact_us");
$sosmed = $sql3->fetch_assoc();
?>