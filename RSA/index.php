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
                <br>
                <br>
                <div class="col-sa-12 col-md-6 col-lg-6">
                    <br>
                    <br>
                    <h4 class="text-center">RSA Chipher</h4>
                    <br />
                    <?php
                    error_reporting(0);
                    function encRSA($M)
                    {
                        $data[0] = 1; //inisiasi data[$i]=1
                        for ($i = 0; $i <= 35; $i++) { //looping sejumlah kunci e=35
                            $rest[$i] = $M % 119; //inisiasi plainteks ($M)
                            if ($data[$i] > 119) { /*jika data lebih dari n=119 maka
kembalikan ke awal lagi (%119) */
                                $data[$i + 1] = $data[$i] * $rest[$i] % 119;
                                /*data baru merupakan perkalian data lama dengan
plainteks sejumlah e=35 */
                            } else {
                                $data[$i + 1] = $data[$i] * $rest[$i];
                            }
                        }
                        $get = $data[35] % 119;
                        return $get;
                    }

                    $kalimat = 'Devi sedang belajar sistem keamanan data';
                    //encrypt
                    echo "Plainteks = $kalimat ";
                    echo "<br>";
                    for ($i = 0; $i < strlen($kalimat); $i++) {
                        $m = ord($kalimat[$i]); //merubah karakter menjadi ASCII
                        $enc = $enc . chr(encRSA($m));
                    }
                    echo "<br>";
                    echo "Hasil Enkripsi = $enc";
                    echo "<br>";
                    echo "<br>";
                    //decrypt
                    for ($i = 0; $i < strlen($kalimat); $i++) {
                        $m = ord($enc[$i]);
                        $dec = $dec . chr(decRSA($m));
                    }
                    echo "Hasil Dekripsi = $dec";

                    function decRSA($E)
                    {
                        $data[0] = 1;
                        for ($i = 0; $i <= 11; $i++) {
                            $rest[$i] = $E % 119;
                            if ($data[$i] > 119) {
                                $data[$i + 1] = $data[$i] * $rest[$i] % 119;
                            } else {
                                $data[$i + 1] = $data[$i] * $rest[$i];
                            }
                        }
                        $get = $data[11] % 119;
                        return $get;
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>