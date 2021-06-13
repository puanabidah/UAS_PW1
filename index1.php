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
        <style>
           header.masthead {
            background-image: url("assets/img/computers.png");
           }  

        </style>
       

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">DiCoder</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link"> <?php echo "Welcome, $username !"; ?> </a></li>
                        <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Dicoder!</div>
                <div class="masthead-heading text-uppercase">Code More, Learn More</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>

        <!-- Awal Table -->
        <div class="container">

            <h1 style="margin-top: 60px; margin-bottom: 20px;">KELAS</h1>
            <table class="table table-striped text-center" style="margin-bottom: 60px;">
            <a href="tambah.php" class="btn btn-primary" style="margin-bottom: 15px; font-family: Montserrat; font-weight:600;" >TAMBAH KELAS</a>   
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama Kelas</th>
                  <th scope="col">Kode Kelas</th>
                  <th scope="col">Biaya</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>

              <!-- awal menampilkan data kelas -->  
                <?php 
                    include_once('koneksi.php');
                    $nomor = 1;            // untuk penomoran pada tabel
                    $data  = mysqli_query($koneksi, "SELECT * FROM kursus");
                    
                    while($d = mysqli_fetch_array($data)) {
                ?>        

                <tbody>
                    <tr>
                      <th scope="row"><?php echo $nomor++ ?></th>
                      <td><?php echo $d['nama'] ?></td>
                      <td><?php echo $d['kode'] ?></td>
                      <td><?php echo $d['harga'] ?></td>
                      <td>
                        <a href="edit.php?id= <?php echo $d["id"]; ?>" class="btn btn-primary">Edit</a>
                        <a href="hapus.php?id= <?php echo $d["id"]; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');" class="btn btn-danger">Hapus</a>
                      </td>
                    </tr>
                </tbody>
                 
                <?php  

                    }

                ?>
              <!-- akhir menampilkan data kelas --> 
              
            </table>
        </div>
    <!-- Akhir Table -->

        <!-- footer -->
        <footer class="footer py-4">
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
