<?php 
require 'LoginFunction.php';

if( isset($_POST["register"]) )   {
    if( registrasi($_POST) > 0 ) {
               $_SESSION["login"] = true;
                header("Location: login.php");
                echo "<script>
                alert('user berhasil ditambahkan!');
                </script>
                 ";
                exit;

    } else {
        echo mysqli_error($conn);
    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center-content">
        <div class="container">
            <h1>Halaman Registrasi</h1>
            <form action="" method="post">
                <label for="Gmail">Gmail:</label>
                <input type="email" name="Gmail" id="Gmail">
                
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                
                <label for="password2">Konfirmasi Password:</label>
                <input type="password" name="password2" id="password2">
                
                <button type="submit" name="register">Register!</button>
            </form>
        </div>
    </div>
</body>
</html>