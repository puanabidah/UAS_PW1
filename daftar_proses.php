<?php
    
    session_start();
    $username   = "";
    $errors     = array();

    include ("koneksi.php");

    if(isset($_POST['buatakun'])){
        
        $username   = strtolower(stripslashes($_POST['username']));
        $password_1 = mysqli_real_escape_string($koneksi, $_POST['password1']);
        $password_2 = mysqli_real_escape_string($koneksi, $_POST['password2']);
        
        if (empty($username))           {array_push($errors, "Username tidak boleh kosong");}
        if (empty($password_1))         {array_push($errors, "Password tidak boleh kosong");}
        if ($password_1 != $password_2) {array_push($errors, "Password tidak cocok");}
        
        $user_check_query = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        
        $result = mysqli_query($koneksi, $user_check_query);
        
        $user = mysqli_fetch_array($result);
        
        if($user){
            if ($user['username'] === $username){
                array_push($errors, "Username sudah ada");
            }
        }
        
        if(count($errors)==0){

            $password = $password_1;

            $query = "INSERT INTO user VALUES('$username', '$password')";
            
            mysqli_query($koneksi, $query);
            
            $_SESSION['username'] = $username;
            
            echo "<script>alert('Akun anda berhasil dibuat'); location='login.php'</script>";
        }
        else {
            echo mysqli_error($koneksi);
        }

    }
?>
