<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h1 class="text-center">Registrasi Akun</h1>
    <hr>
    <!-- Nama -->
    <div class="form-group">
        <label for="nim">Nama</label>
        <input class="form-control" name="nama" required type="text" placeholder="Isikan Username">
    </div>
    <!-- Username -->
    <div class="form-group">
        <label for="nim">Username</label>
        <input class="form-control" name="username" required type="text" placeholder="Isikan Username">
    </div>
    <!-- Email -->
    <div class="form-group">
        <label for="nama">Email</label>
        <input class="form-control" name="email" required type="text" placeholder="Isikan Email" >
    </div>
    <!-- Kata Sandi -->
    <div class="form-group">
        <label for="passwordd">Password</label>
        <input class="form-control" name="passwordd" required type="password" >
    </div>

    </br>
    <button class="btn btn-primary" type="reset" name="reset" href="index.php">Reset</button>
    <button class="btn btn-success" type="submit" name="submit" >Registrasi</button>
</form>