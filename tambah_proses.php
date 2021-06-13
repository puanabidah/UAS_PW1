<?php 

if(isset($_POST['tambah'])) {
	include_once('koneksi.php');

	$nama = htmlspecialchars($_POST['nama']);
	$kode = htmlspecialchars($_POST['kode']);
	$harga = htmlspecialchars($_POST['harga']);

	$input = mysqli_query($koneksi, "INSERT INTO kursus VALUES ('', '$nama', '$kode', $harga)");

	if($input) {
		echo"<script> 
				alert('Data berhasil ditambahkan') 
				window.location = 'index1.php'
			</script>";
	}
	else {
		echo"<script> 
				alert('Gagal menambahkan data') 
				window.location = 'tambah.php'
				</script>";
	}

}
else {
	echo "<script> window.history.back() </script>";
}

?>