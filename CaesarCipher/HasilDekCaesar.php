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
                    <h4 class="text-center">Hasil Dekripsi Caesar Chipher</h4>
                    <br />
                    <form class="mb-3">

                        <div class="mb-3">
                            <label for="exampleInputPlainteks" class="form-label">Enkripsi : </label>
                            <?php
                            $key = $_GET["key"];
                            $nmfile = "enkripsi.txt";
                            $fp = fopen($nmfile, "r"); // buka file hasil enkripsi
                            $isi = fread($fp, filesize($nmfile));

                            for ($i = 0; $i < strlen($isi); $i++) {
                                $kode[$i] = ord($isi[$i]); // rubah ASII ke desimal
                                $b[$i] = ($kode[$i] - $key) % 256; // proses dekripsi Caesar
                                $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
                            }
                            echo "<br>";
                            for ($i = 0; $i < strlen($isi); $i++) {
                                echo $isi[$i];
                            }
                            ?>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hasil Deskripsi : </label>
                            <?php
                            $key = $_GET["key"];
                            $nmfile = "enkripsi.txt";
                            $fp = fopen($nmfile, "r"); // buka file hasil enkripsi
                            $isi = fread($fp, filesize($nmfile));

                            for ($i = 0; $i < strlen($isi); $i++) {
                                $kode[$i] = ord($isi[$i]); // rubah ASII ke desimal
                                $b[$i] = ($kode[$i] - $key) % 256; // proses dekripsi Caesar
                                $c[$i] = chr($b[$i]); //rubah desimal ke ASCII
                            }
                            echo "<br>";
                            for ($i = 0; $i < strlen($isi); $i++) {
                                echo $c[$i];
                            }
                            echo "<br>";
                            ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>