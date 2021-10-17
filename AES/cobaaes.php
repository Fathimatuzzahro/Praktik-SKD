<html>
<head>
    <title>FORM ENKRIPSI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body{
        background-color:#952CFF;
    }
    .coba{
        position: absolute;
        width: 400px;
        height: 250px;
        left: 580px;
        top: 140px;
        bottom: 80px;
        border: 2px solid #00BFFF;
        border-radius: 50px;
        background: #FFFFFF;
    }
    h2{
        position: absolute;
        width: 250px;
        height: 65px;
        left: 150px;
        top: 10px;
        font-size:50px;
        line-height: 69px;
        color: #952CFF;
    }
    .plain{
        position: absolute;
        left: 40px;
        top: 120px;
        font-weight: bold;
    }
    input[type=text] {
        width: 241px;
        border: hidden;
        border-radius: 5px;
        background: #e0f7ff;
    }
    .submit{
        position: absolute;
        left: 120px;
        top: 180px;
    }
    .reset{
        position: absolute;
        left: 220px;
        top: 180px;
    }
</style>
<body>
    <div class="coba">
    <h2>AES</h2>
    <form action="aes.php" method="get">
        <div class="plain">
            <table>
                <tr>
                    <td>Plainteks : 
                    <input type="text" name="plainaes">
                    </td>
                </tr>
            </table>
        </div>
        <br>
        <br>
        <div class="submit">
            <input type="submit" value="Kirim" class="btn btn-outline-primary">
        </div>
        <div class="reset">
            <input type="reset" value="Reset" class="btn btn-outline-warning">
        </div>
    </form>
</div>
</body>
</html>
