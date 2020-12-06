<?php
	include '../koneksi.php';
	$kabupaten = $_POST['florist'];

	echo "<option value=''>Pilih Produk</option>";

	$query = "SELECT * FROM tb_mbunga_papan WHERE id_florist=? ORDER BY nama_produk ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $kabupaten);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_produk'] . "'>" . $row['nama_produk'] . "</option>";
	}
?>