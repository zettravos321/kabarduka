<?php
	include '../../koneksi.php';
	$kota = $_POST['kota'];

	echo "<option value=''>Pilih Florist</option>";

	$query = "SELECT * FROM tb_mflorist WHERE id_kota=? ORDER BY nama_florist ASC";
	$dewan1 = $koneksi->prepare($query);
	$dewan1->bind_param("i", $kota);
	$dewan1->execute();
	$res1 = $dewan1->get_result();
	while ($row = $res1->fetch_assoc()) {
		echo "<option value='" . $row['id_florist'] . "'>" . $row['nama_florist'] . "</option>";
	}
?>