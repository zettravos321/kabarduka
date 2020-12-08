<?php
 $idalmarhum = $_POST['id_almarhum'];
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

    
$conn = new mysqli('localhost','root','','rumah-duka');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT into tb_almarhum VALUES ('$idalmarhum','$idrumahduka','$nama','$imgContent','$lahir','$kematian','$alamat','$kontak','$upacara','$sts')");
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    header("Location: Kabar-duka.php");  
    $stmt->close();
    $conn->close();
}
?>