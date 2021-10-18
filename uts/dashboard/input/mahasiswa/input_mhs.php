<?php

require 'functions_mhs.php'; 

$rows = query("SELECT * FROM mahasiswa");
$query = mysqli_query($conn,"SELECT * FROM mahasiswa");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Data Mahasiswa</title>
</head>
<body align="center" >
<h1 align="center" >Data Mahasiswa</h1>
<a href="submit_mhs.php">Tambah data</a>
    <br>
    <br>
        <table align="center" border="1" cellspacing=0 cellpadding=10>
            <thead>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nim</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Angkatan</th>
                <th>Aksi</th>
                
            </thead>
            <tbody>   
                
            <?php $i=1; ?> 
                <?php foreach ($rows as $row) :?>
                    <tr>
                        <td><?php echo $row["id_mhs"]; ?></td>
                        <td><?php echo $row["nama_mhs"]; ?></td>
                        <td><?php echo $row["nim"]; ?></td>
                        <td><?php echo $row["kelas"]; ?></td>
                        <td><?php echo $row["jurusan"]; ?></td>
                        <td><?php echo $row["angkatan"]; ?></td>
                        <td>
                            <a href="ubah_mhs.php?id_mhs= <?php echo $row["id_mhs"]; ?>">Ubah | </a>
                            <a href="hapus_mhs.php?id_mhs= <?php echo $row["id_mhs"]; ?>"
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