<?php
require 'functions_mhs.php';

if (isset($_POST["submit"])){
    
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'input_mhs.php';
            </script>
        ";
        }
        else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan !!!');
                document.location.href = 'input_mhs.php';
            </script>
        ";
     }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Mahasiswa</title>
</head>
<body>
<div class="container">
    <h1 align="center">Tambah Data Mahasiswa</h1>
        <form  action="" method="POST" >
            <table align="center">
             
                <tr>
                    <td><b>Nama Mahasiswa :</b></td>
                    <td><input type="text" name="nama_mhs" id="nama_mhs"></td>
                </tr>
                <tr>
                    <td><b>Nim :</b></td>
                    <td><input type="text" name="nim" id="nim"></td>
                </tr>
                <tr>
                    <td><b>Kelas :</b></td>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <td><b>Jurusan :</b></td>
                    <td><input type="text" name="jurusan" id="jurusan"></td>
                </tr>
                <tr>
                    <td><b>Angkatan :</b></td>
                    <td><input type="text" name="angkatan" id="angkatan"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_mhs.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
                </tr>

            </table>
        </form>
</div>
</body>
</html>