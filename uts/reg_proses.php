<?php
    include "koneksi.php";
    // $id = $_POST['user_name'];
    // $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST["password"];
    $password_md5 = md5($password);
    // $email = $_POST['email'];
    $simpan = mysqli_query($conn, "INSERT INTO uts ('id', 'username', 'password') VALUES ('', $username','$password_md5')");

    // echo $simpan;
    
    // if ($simpan) {
    // echo "Data Berhasil Disimpan <a href='index.php'>Login</a>";
    
    // exit;
    // }else {
    // echo "Gagal menyimpan data";
    // exit;
    // }
?>