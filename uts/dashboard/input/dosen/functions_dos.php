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
        $nama_dosen = $data["nama_dosen"];
        $nip = $data["nip"];
        $query = "INSERT INTO dosen VALUES
        ('', '$nama_dosen', '$nip')   
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn); 
    
    }

    function hapus($id_dosen)
    {

        global $conn;
        $query = "DELETE FROM dosen WHERE id_dosen=$id_dosen";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        
        global $conn; 
        $id_dosen = $data["id_dosen"];
        $nama_dosen = $data["nama_dosen"];
        $nip = $data["nip"];

        $query = "UPDATE dosen SET
                    nama_dosen = '$nama_dosen',
                    nip = '$nip',
                    WHERE id_dosen='$id_dosen'

        ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
        
    }
    

?>