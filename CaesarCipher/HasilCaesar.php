<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Caesar Chipher</title>
</head>
<br />
<body>
<div class="container">
        <div class="container">
            <div class="box">
                <div class="col-sa-5 col-md-4 col-lg-6">
                    <img src="Saly.png" width="1000" height="350" alt="" class="img-fluid">
                </div>
                <div class="col-sa-12 col-md-6 col-lg-6">
                    <br>
                    <br>
                    <h4 class="text-center">Hasil Enkripsi Caesar Chipher</h4>
                    <br />
                    <form class="mb-3">

                        <div class="mb-3">
                            <label for="exampleInputPlainteks" class="form-label">Plainteks : </label>
                            <?php
                            $kalimat = $_GET["kata"];
                            $key = $_GET["key"];
                            for ($i = 0; $i < strlen($kalimat); $i++) {
                                $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
                                $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
                                $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
                            }
                            echo "<br>";
                            for ($i = 0; $i < strlen($kalimat); $i++) {
                                echo $kalimat[$i];
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label  class="form-label">Hasil Enkripsi : </label>
                            <?php
                            $kalimat = $_GET["kata"];
                            $key = $_GET["key"];
                            for ($i = 0; $i < strlen($kalimat); $i++) {
                                $kode[$i] = ord($kalimat[$i]); //rubah ASCII ke desimal
                                $b[$i] = ($kode[$i] + $key) % 256; //proses enkripsi
                                $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
                            }
                            echo "<br>";
                            $hsl = '';
                            for ($i = 0; $i < strlen($kalimat); $i++) {
                                echo $c[$i];
                                $hsl = $hsl . $c[$i];
                            }
                            echo "<br>";
                            //simpan data di file
                            $fp = fopen("enkripsi.txt", "w");
                            fputs($fp, $hsl);
                            fclose($fp);
                            ?>
                        </div>
                    </form>
                    <h3 class="text-center">Form untuk Deskripsi</h3>
                    <br/>       
                    <form class="mb-3" action="HasilDekCaesar.php" method="get">
                        <div class="mb-3">
                            <label for="exampleInputKey" class="form-label">Key</label>
                            <input placeholder="Masukan Key" type="text" name="key" maxlength="5" class="form-control" id="exampleInputKey">
                        </div>
                        <button type="reset" class="btn" value="ulangi">Reset</button>
                        <button type="submit" class="btn" value="kirim">Submit</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>