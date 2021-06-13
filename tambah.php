<?php
    session_start();
    include "koneksi.php";

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dicoder</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" style="padding: 12px;">
            <div class="container">
                <a class="navbar-brand" href="#page-top">DiCoder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    


    	<!-- Awal Form tambah -->
	    <div class="container" >
	        <form action="tambah_proses.php" method="post" style="margin-top: 165px;">
	          <div class="form-group row">
	            <label for="nama" class="col-sm-2 col-form-label" style="margin-bottom: 60px;">Nama Kelas</label>
	            <div class="col-sm-10">
	              <input type="text" class="form-control" name="nama" id="nama" required>
	           </div>
               <div class="form-group row">
                <label for="kode" class="col-sm-2 col-form-label" style="margin-bottom: 60px;">Kode Kelas</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="kode" id="kode" required>
               </div>
	          </div>
	          <div class="form-group row">
	            <label for="harga" class="col-sm-2 col-form-label" style="margin-bottom: 60px;">Biaya</label>
	            <div class="col-sm-10">
	              <input type="text" class="form-control" name="harga" id="harga" required>
	            </div>
	          </div>
	          <div class="form-group row">
	            <div class="col-sm-10">
	              <a href="index1.php" class="btn btn-success">Kembali</a>
	              <button type="submit" name="tambah" value="tambah" class="btn btn-primary">Tambah</button>
	            </div>
	          </div>
	        </form>
	    </div>
    	<!-- Akhir Form tambah -->

        <!-- footer -->
        <footer class="footer py-4" style="margin-top: 82px;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Dicoder 2021</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
