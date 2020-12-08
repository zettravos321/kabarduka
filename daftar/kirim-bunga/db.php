<?php
    $statuskb = @$_POST['status'];
    $nama_pengirim = @$_POST['nama_pengirim'];
    $no_hp_pengirim = @$_POST['no_hp_pengirim'];
    $alamat_pengirim = @$_POST['alamat_pengirim'];
    $nama_almarhum = @$_POST['nama_almarhum'];
    $alamat_penerima = @$_POST['alamat_penerima'];
    $kontak_keluarga = @$_POST['kontak_keluarga'];
    $kota = @$_POST['kota'];
    $florist = @$_POST['florist'];
    $produk = @$_POST['produk'];
    $kalimat = @$_POST['kalimat'];  

	// Database connection
	$conn = new mysqli('localhost','root','','rumah-duka');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into kirim_bunga(nama_pengirim, no_pengirim, alamat_pengirim, nama_almarhum, alamat_penerima, kontak_keluarga, id_kota, id_florist, id_produk, kalimat_ucapan, statuskb) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssssss", $nama_pengirim, $no_hp_pengirim, $alamat_pengirim, $nama_almarhum, $alamat_penerima, $kontak_keluarga, $kota, $florist, $produk, $kalimat, $statuskb);
		$execval = $stmt->execute();
		echo $execval;
        echo "Registration successfully...";
        header("Location: kirim-bunga.php");  
		$stmt->close();
		$conn->close();
	}
?>