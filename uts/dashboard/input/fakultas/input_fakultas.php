<?php

require 'functions_fak.php'; 

$rows = query("SELECT * FROM fakultas");
$query = mysqli_query($conn,"SELECT * FROM fakultas");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Fakultas</title>
</head>
<body align="center" >
<h1 align="center" >Data Fakultas</h1>
<a href="submit_fak.php">Tambah data</a>
    <br>
    <br>
        <table align="center" border="1" cellspacing=0 cellpadding=10>
            <thead>
                <th>No</th>
                <th>Nama Fakultas</th>
                <th>Aksi</th>
                
            </thead>
            <tbody>   
                
            <?php $i=1; ?> 
                <?php foreach ($rows as $row) :?>
                    <tr>
                        <td><?php echo $row["id_fakultas"]; ?></td>
                        <td><?php echo $row["nama_fakultas"]; ?></td>
                        <td>
                            <a href="ubah_fak.php?id_fakultas= <?php echo $row["id_fakultas"]; ?>">Ubah | </a>
                            <a href="hapus_fak.php?id_fakultas= <?php echo $row["id_fakultas"]; ?>"
                            onclick="return confirm('Apakah anda yakin akan menghapus data?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?> 
                
            </tbody>
        </table>
        <br>
        <br>
</body>
</html>