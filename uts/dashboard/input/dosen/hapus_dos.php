<?php

require 'functions_dos.php';

$id_dosen = $_GET["id_dosen"];

if (hapus($id_dosen)>0){
    echo "
    <script>
        alert('Data BERHASIL dihapus');
        document.location.href = 'input_dosen.php';
    </script>    
    ";
}
else{
    echo "
    <script>
        alert('Data GAGAL dihapus');
        document.location.href = 'input_dosen.php';
    </script>    
    ";
}


?>