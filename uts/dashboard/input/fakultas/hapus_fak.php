<?php

require 'functions_fak.php';

$id_fakultas = $_GET["id_fakultas"];

if (hapus($id_fakultas)>0){
    echo "
    <script>
        alert('Data BERHASIL dihapus');
        document.location.href = 'input_fakultas.php';
    </script>    
    ";
}
else{
    echo "
    <script>
        alert('Data GAGAL dihapus');
        document.location.href = 'input_fakultas.php';
    </script>    
    ";
}


?>