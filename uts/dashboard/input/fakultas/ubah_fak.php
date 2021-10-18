<?php

require 'functions_fak.php';

$id_fakultas = $_GET["id_fakultas"];
    
$rows = query("SELECT * FROM fakultas WHERE id_fakultas=$id_fakultas");

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
    <title>Admin | Data Fakultas</title>
</head>
<body>
    <h1 align="center">Ubah Data Fakultas</h1>
    
        <form action="" method="POST">
            <?php foreach ($rows as $row) :?>
            <table align="center">
                <input type="hidden" name="id_fakultas" id="id_fakultas" value="<?php echo $row["id_fakultas"]; ?>">
                <tr>
                    <td><b>Nama :</b></td>
                    <td><input type="text" name="nama_fakultas" id="nama_fakultas" value="<?php echo $row["nama_fakultas"]; ?>"></td>
                </tr>
                <tr>
                <td></td>
                    <td><button type="submit" name="submit"><h4 href="input_fakultas.php"><b>Submit</b></h4></button>
                    <button type="reset" name="reset"><h4><b>Reset</b></h4></button></td>
                </tr>
               
            </table>
            <?php endforeach; ?> 
        </form>

</body>
</html>