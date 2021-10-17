<?php 
//Function Encrypt

$ciphertext = "aes-256-cbc"; 
$key = openssl_random_pseudo_bytes(16); 
$ivlength = openssl_cipher_iv_length($ciphertext); 
$iv = openssl_random_pseudo_bytes($ivlength);
$plaintext = $_GET["plainaes"]; 
$encrypted_text = openssl_encrypt($plaintext, $ciphertext, $key, 0, $iv);
?>

<?php 
//Funtion Decrypt

$ciphertext = "aes-256-cbc";
$decrypted_text = openssl_decrypt($encrypted_text, $ciphertext, $key, 0, $iv);  
?>
<html>
<head>
    <title>AES</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: #952CFF;
    }
    .coba{
        position: absolute;
        width: 400px;
        height: 300px;
        left: 580px;
        top: 140px;
        bottom: 80px;
        border: 2px solid #00BFFF;
        border-radius: 50px;
        background: #FFFFFF;
    }
    .enkrip{
        position: absolute;
        left: 40px;
        top: 120px;
        font-weight: bold;
    }
    .dek{
        position: absolute;
        left: 40px;
        top: 150px;
        font-weight: bold;
    }
    h2{
        position: absolute;
        width: 250px;
        height: 65px;
        left: 140px;
        top: 10px;
        font-size:50px;
        line-height: 69px;
        color: #952CFF;
    }
    .lagi{
        position: absolute;
        left: 165px;
        top: 250px;
    }
    .teks{
        position: absolute;
        left: 140px;
        top: 220px;
    }
</style>
<body>
    <div class="coba">
        <h2>Hasil</h2>
        <div class="enkrip">
            <a>Enkrip Text : </a>
            <?php echo $encrypted_text;?>
        </div>
            </br>
        <div class="dek">
            <a>Dekrip Text : </a>
            <?php echo $decrypted_text;?>
        </div>
        <div class='teks'>
            <a>Ingin Coba Lagi?</a>
        </div>
        <div class='lagi'>
            <a href="cobaaes.php">Coba Lagi</a>
        </div>
    </div>
</body>
</html>
