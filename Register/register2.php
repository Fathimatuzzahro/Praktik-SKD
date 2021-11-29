<?php require 'tampilan/header.php'; ?>
<?php $pagename = "Registrasi Akun"; ?>

<?php require 'functions.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Registrasi BERHASIL');
            document.location.href = '/UTS_SKD/index.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Registrasi GAGAL');
            document.location.href = '/UTS_SKD/Register/register.php';
        </script>";
    }
}
?>

<style type="text/css">
    body {
        width: 100%;
        height: 750px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: #4368D7;
        ;
    }

    .box {
        width: 80%;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #ffff;
        border-radius: 5px;
        padding: 50px 100px;
    }
</style>
<div class="box">
    <div class="container pt-md-5 pt-3 pb-3">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo ($_SERVER["REQUEST_METHOD"] == "POST" && $isValid == true) ? "img/friend.png" : "img/friend.png"; ?>" alt="Home Image" class="img-fluid">
            </div>
            <div class="col-md-6 pl-md-5 pr-md-5 my-auto border-left overflow-auto my-form-container" style="height: 500px;">
                <?php require 'form/form.php'; ?>
            </div>
        </div>
    </div>
</div>
<?php require 'tampilan/footer.php'; ?>