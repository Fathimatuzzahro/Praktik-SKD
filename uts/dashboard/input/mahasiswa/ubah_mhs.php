<?php

require 'functions_mhs.php';

$id_mhs = $_GET["id_mhs"];
    
$rows = query("SELECT * FROM mahasiswa WHERE id_mhs=$id_mhs");

if (isset($_POST["submit"])){
    
    if(ubah($_POST)>0){
        echo "
            <script>
                alert('Data BERHASIL diubah');
                document.location.href = 'input_fakultas.php';
            </script>
        ";
        }
        else{
        echo "
            <script>
                alert('Data GAGAL diubah');
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
    <title>Admin | Data Dosens</title>
</head>
<body>
    <h1 align="center">Ubah Data Dosen</h1>
    
        <form action="" method="POST">
            <?php foreach ($rows as $row) :?>
            <table align="center">
                <input type="hidden" name="id_mhs" id="id_mhs" value="<?php echo $row["id_mhs"]; ?>">
                <tr>
                    <td><b>Nama Mahasiswa :</b></td>
                    <td><input type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $row["nama_mhs"]; ?>"></td>
                </tr>
                <tr>
                    <td><b>Nim :</b></td>
                    <td><input type="text" name="nim" id="nim" value="<?php echo $row["nim"]; ?>"></td>
                </tr>
                <tr>
                    <td><b>Kelas :</b></td>
                    <td><input type="text" name="kelas" id="kelas" value="<?php echo $row["kelas"]; ?>"></td>
                </tr><tr>
                    <td><b>Jurusan :</b></td>
                    <td><input type="text" name="jurusan" id="jurusan" value="<?php echo $row["jurusan"]; ?>"></td>
                </tr><tr>
                    <td><b>Angkatan :</b></td>
                    <td><input type="text" name="angkatan" id="angkatan" value="<?php echo $row["angkatan"]; ?>"></td>
                </tr>
                <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_mhs.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
                </tr>
               
            </table>
            <?php endforeach; ?> 
        </form>

</body>
</html>