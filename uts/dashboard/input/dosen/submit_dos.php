<?php
require 'functions_dos.php';

if (isset($_POST["submit"])){
    
    if(tambah($_POST)>0){
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'input_dosen.php';
            </script>
        ";
        }
        else{
        echo "
            <script>
                alert('Data Gagal Ditambahkan !!!');
                document.location.href = 'input_dosen.php';
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
    <title>Admin | Data Dosen</title>
</head>
<body>
<div class="container">
    <h1 align="center">Tambah Data Dosen</h1>
        <form  action="" method="POST" >
            <table align="center">
             
                <tr>
                    <td><b>Nama Dosen :</b></td>
                    <td><input type="text" name="nama_dosen" id="nama_dosen"></td>
                </tr>
                <tr>
                    <td><b>Nip :</b></td>
                    <td><input type="text" name="nip" id="nip"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_dosen.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
                </tr>

            </table>
        </form>
</div>
</body>
</html>