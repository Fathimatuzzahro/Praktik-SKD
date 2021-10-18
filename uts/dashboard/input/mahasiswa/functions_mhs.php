<?php
     $conn = mysqli_connect('localhost','root', '', 'si_akd'); 

     function query($query)
     {
         global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[]=$row;
        }
        return $rows;
     }

     function tambah($data)
     {
        global $conn;
        $nama_mhs = $data["nama_mhs"];
        $nim = $data["nim"];
        $kelas = $data["kelas"];
        $jurusan = $data["jurusan"];
        $angkatan = $data["angkatan"];

        $query = "INSERT INTO mahasiswa VALUES
        ('', '$nama_mhs', '$nim', '$kelas', '$jurusan', '$angkatan')   
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn); 
    
    }

    function hapus($id_mhs)
    {

        global $conn;
        $query = "DELETE FROM mahasiswa WHERE id_mhs=$id_mhs";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        
        global $conn; 
        $id_mhs = $data["id_mhs"];
        $nama_mhs = $data["nama_mhs"];
        $nim = $data["nim"];
        $kelas = $data["kelas"];
        $jurusan = $data["jurusan"];
        $angkatan = $data["angkatan"];

        $query = "UPDATE mahasiswa SET
                    nama_mhs = '$nama_mhs',
                    nim = '$nim',
                    kelas = '$kelas',
                    jurusan = '$jurusan',
                    angkatan = '$angkatan',
                    WHERE id_mhs='$id_mhs'

        ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
        
    }
    

?>