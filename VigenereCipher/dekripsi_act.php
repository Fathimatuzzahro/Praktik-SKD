<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Dekripsi Vigenere Cipher</title>
</head>
<br />

<body>
    <?php
    include "lib/lib.php";
    $hasil_ciper = str_replace(" ", "", $_POST['ciper']);
    $kunci = str_replace(" ", "", $_POST['kunci']);
    $panjang_kunci = strlen($kunci);
    $panjang_ciper = strlen($hasil_ciper);
    $index_x = 0;
    $index_y = 0;
    $hasil_konversi = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_ciper) {
        $x = substr($hasil_ciper, $index_x, 1);
        $y = substr($kunci, $index_y, 1);
        $konversi_x = huruf_ke_angka($x);
        $konversi_y = huruf_ke_angka($y);
        if ($konversi_x >= $konversi_y) {
            $hasil = $konversi_x - $konversi_y;
        } else {
            $hasil = $konversi_x + (26 - $konversi_y);
        }
        $hasil_konversi[$index_x] = angka_ke_huruf($hasil);
        $index_x++;
        $index_y++;

        if ($index_y == $panjang_kunci) {
            $index_y = 0;
        }
    }
    $i = 0;
    $hasil_akhir = "";
    while ($i < $index_x) {
        $hasil_akhir .= $hasil_konversi[$i];
        $i++;
    }
    ?>
     <div class="container">
        <div class="container">
            <div class="box">
                <div class="col-sa-5 col-md-4 col-lg-6">
                    <img src="Saly.png" width="1000" height="350" alt="" class="img-fluid">
                </div>
                <div class="col-sa-12 col-md-6 col-lg-6">
                    <h4 class="text-center">Hasil Dekripsi</h4>
                    <h4 class="text-center">Vigenere Cipher</h4>
                    <br />
                    <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
                        <label for="basic">Plainteks :</label>
                        <textarea class="form-control" name="plain" id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
                        <label for="basic">Masukkan Kunci :</label>
                        <textarea class="form-control" name="kunci" id="textarea-a"><?php echo $kunci; ?></textarea><br>
                        <input type="submit" class="btn btn-primary" value=" Encrypt" data-theme="a">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>