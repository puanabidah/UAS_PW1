<?php 

if(isset($_GET['id'])) {
	include('koneksi.php');
	$id = $_GET['id'];
	$cek = mysqli_query($koneksi, "SELECT id FROM kursus WHERE id = $id") or die(mysqli_error());

	if(mysqli_num_rows($cek) == 0) {
		echo "<script> window.history.back() </script>";
	}

	else {
		$del = mysqli_query($koneksi, "DELETE FROM kursus WHERE id = $id");
		if($del) {
			echo"<script> 
					alert('Data berhasil dihapus') 
					window.location = 'index1.php'
				</script>";
		}
		else {
			echo"<script> 
					alert('Gagal menghapus data') 
					window.location = 'index1.php'
					</script>";
		}

	}

}
else {
	echo "<script> window.history.back() </script>";
}


?>
