<?php
require 'functions_fak.php';

if (isset($_POST["submit"])){
    
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'input_fakultas.php';
            </script>
        ";
        }
        else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan !!!');
                document.location.href = 'input_fakultas.php';
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
    <title>Admin | Data Fakultas</title>
</head>
<body>
<div class="container">
    <h1 align="center">Tambah Data Fakultas</h1>
        <form  action="" method="POST" >
            <table align="center">
             
                <tr>
                    <td><b>Nama Fakultas :</b></td>
                    <td><input type="text" name="nama_fakultas" id="nama_fakultas"></td>
                </tr>
                <tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_fakultas.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
            </div>
                </tr>
                   
            </table>
        </form>
</div>
</body>
</html>