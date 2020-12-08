<?php

$id_kota = @$_POST['id_kota'];
$nama_florist = @$_POST['nama_florist'];
$alamat_florist = @$_POST['alamat_florist'];
$wa_florist = @$_POST['wa_florist'];
$bank_florist = @$_POST['bank_florist'];
$ac_bank_florist = @$_POST['ac_bank_florist'];
$sts = @$_POST['status'];
$simpan = @$_POST['simpan'];

$conn = new mysqli('localhost','root','','rumah-duka');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into tb_mflorist(id_kota, nama_florist, alamat_florist, wa_florist, bank_florist, ac_bank_florist, status) values(?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss",$id_kota, $nama_florist, $alamat_florist, $wa_florist, $bank_florist, $ac_bank_florist, $sts);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    header("Location: Florist.php");  
    $stmt->close();
    $conn->close();
}
?>
