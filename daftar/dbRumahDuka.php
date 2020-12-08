<?php
    $id_rumah_duka = @$_POST['id_rumah_duka'];
    $id_kota = @$_POST['id_kota'];
    $nama_rumah_duka = @$_POST['nama_rumah_duka'];
    $alamat_rumah_duka = @$_POST['alamat_rumah_duka'];
    $telp_rumah_duka = @$_POST['telp_rumah_duka'];
    $wa_rumah_duka = @$_POST['wa_rumah_duka'];

    
$conn = new mysqli('localhost','root','','rumah-duka');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into tb_mrumah_duka(id_kota, nama_rumah_duka, alamat_rumah_duka, telp_rumah_duka, wa_rumah_duka) values(?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss",$id_kota, $nama_rumah_duka, $alamat_rumah_duka, $telp_rumah_duka, $wa_rumah_duka);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    header("Location: Rumah-duka.php");  
    $stmt->close();
    $conn->close();
}

?>