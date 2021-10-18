<?php

require 'functions_mhs.php';

$id_mhs = $_GET["id_mhs"];

if (hapus($id_mhs)>0){
    echo "
    <script>
        alert('Data BERHASIL dihapus');
        document.location.href = 'input_mhs.php';
    </script>    
    ";
}
else{
    echo "
    <script>
        alert('Data GAGAL dihapus');
        document.location.href = 'input_mhs.php';
    </script>    
    ";
}


?>