<?php 

if(isset($_POST['simpan'])){
	include('koneksi.php');
	$id     = $_POST['id'];
	$nama   = $_POST['nama'];	
	$kode   = $_POST['kode'];
	$harga  = $_POST['harga'];
	$update = mysqli_query($koneksi, "UPDATE kursus SET 

			  nama = '$nama',
			  kode = '$kode',
			  harga = $harga

			  WHERE id = $id") or die(mysqli_error());  // untuk mengakhiri statement dan memberitahu letak kesalahan

	if($update) {
		echo"<script> 
				alert('Data berhasil diubah') 
				window.location = 'index1.php'
			</script>";
	}
	else {
		echo"<script> 
				alert('Gagal menyimpan data') 
				window.location = 'edit.php ?id= ".$id."'
				</script>";
	}
}
else {
	echo "<script> window.history.back() </script>";
}

?>