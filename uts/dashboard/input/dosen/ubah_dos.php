<?php

require 'functions_dos.php';

$id_dosen = $_GET["id_dosen"];
    
$rows = query("SELECT * FROM dosen WHERE id_dosen=$id_dosen");

if (isset($_POST["submit"])){
    
    if(ubah($_POST)>0){
        echo "
            <script>
                alert('Data BERHASIL diubah');
                document.location.href = 'input_dosen.php';
            </script>
        ";
        }
        else{
        echo "
            <script>
                alert('Data GAGAL diubah');
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
    <h1 align="center">Ubah Data Dosen</h1>
    
        <form action="" method="POST">
            <?php foreach ($rows as $row) :?>
            <table align="center">
                <input type="hidden" name="id_dosen" id="id_dosen" value="<?php echo $row["id_dosen"]; ?>">
                <tr>
                    <td><b>Nama Dosen :</b></td>
                    <td><input type="text" name="nama_dosen" id="nama_dosen" value="<?php echo $row["nama_dosen"]; ?>"></td>
                </tr>
                <tr>
                    <td><b>Nip :</b></td>
                    <td><input type="text" name="nip" id="nip" value="<?php echo $row["nip"]; ?>"></td>
                </tr>
                <tr>
                <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_dosen.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
                </tr>
               
            </table>
            <?php endforeach; ?> 
        </form>

</body>
</html>