<?php

require 'functions_dos.php'; 

$rows = query("SELECT * FROM dosen");
$query = mysqli_query($conn,"SELECT * FROM dosen");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Dosen</title>
</head>
<body align="center" >
<h1 align="center" >Data Dosen</h1>
<a href="submit_dos.php">Tambah data</a>
    <br>
    <br>
        <table align="center" border="1" cellspacing=0 cellpadding=10>
            <thead>
                <th>No</th>
                <th>Nama Dosen</th>
                <th>Nip</th>
                <th>Aksi</th>

            </thead>
            <tbody>   
                
            <?php $i=1; ?> 
                <?php foreach ($rows as $row) :?>
                    <tr>
                        <td><?php echo $row["id_dosen"]; ?></td>
                        <td><?php echo $row["nama_dosen"]; ?></td>
                        <td><?php echo $row["nip"]; ?></td>
                        <td>
                            <a href="ubah_dos.php?id_dosen= <?php echo $row["id_dosen"]; ?>">Ubah | </a>
                            <a href="hapus_dos.php?id_dosen= <?php echo $row["id_dosen"]; ?>"
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