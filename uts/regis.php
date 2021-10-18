<?php
    require 'functions.php';

    if(isset($_POST["registrasi"])) {
        if(registrasi($_POST)>0) {
            echo "
                <script>
                    alert('Registrasi Berhasil!');
                </script>
            ";
        } else{
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
    <title>Register Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Form Registrasi</h1>

    <div class="stand">
    <div class="outer-screen">
        <div class="inner-screen">
        <div class="form">
            <form method="POST" action="">
                <input type="text" name="username" class="zocial-dribbble" placeholder="Enter Your Username" required/>
                <input type="password" name="password" placeholder="Enter Your Password" required/>
                <input type="submit" name="registrasi" value="Register!" />
                <a href="index.php">Login Now!</a>
            </form>
        </div> 
        </div> 
    </div> 
    </div>
</body>
</html>