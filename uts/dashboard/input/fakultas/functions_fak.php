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
        $nama_fakultas = $data["nama_fakultas"];

        $query = "INSERT INTO fakultas VALUES
        ('', '$nama_fakultas')   
        ";
        
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn); 
    
    }

    function hapus($id_fakultas)
    {

        global $conn;
        $query = "DELETE FROM fakultas WHERE id_fakultas=$id_fakultas";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }
    
    function ubah($data){
        
        global $conn; 
        $id_fakultas = $data["id_fakultas"];
        $nama_fakultas = $data["nama_fakultas"];

        $query = "UPDATE fakultas SET
                    nama_fakultas = '$nama_fakultas',
                    WHERE id_fakultas='$id_fakultas'

        ";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
        
    }
    

?>