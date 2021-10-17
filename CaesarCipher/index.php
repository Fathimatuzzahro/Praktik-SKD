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
                    <h4 class="text-center">Caesar Chipher</h4>
                    <br />
                    <form class="mb-3" action="HasilCaesar.php" method="get">
                        <div class="mb-3">
                            <label for="exampleInputPlainteks" class="form-label">Plainteks</label>
                            <input placeholder="Masukan Plainteks" type="text" name="kata" class="form-control" id="exampleInputPlainteks" aria-describedby="PlainteksHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputKey" class="form-label">Key</label>
                            <input placeholder="Masukan Key" type="text" name="key" maxlength="5" class="form-control" id="exampleInputKey">
                        </div>
                        <button type="reset" class="btn" value="reset">Reset</button>
                        <button type="submit" class="btn" value="kirim">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>