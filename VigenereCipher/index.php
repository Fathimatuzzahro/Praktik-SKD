<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Form Vigenere Cipher</title>
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
                    <h2>Vigenere Cipher</h2>
                    <br />
                    <form action="enkripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
                        <label for="basic">Masukkan Plain Text :</label>
                        <textarea class="form-control" name="plain" id="textarea-a"></textarea>
                        <label for="basic">Masukkan Kunci :</label>
                        <textarea class="form-control" name="kunci" id="textarea-a"></textarea><br>
                        <input type="reset" class="btn btn-primary" value=" Hapus" data-theme="a">
                        <input type="submit" class="btn btn-primary" value=" Encrypt" data-theme="a">
                    </form>
                </div>
</body>
</html>