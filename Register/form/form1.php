<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h1 class="text-center">Registrasi Akun</h1>
    <hr>
    <!-- Nama -->
    <div class="form-group">
        <label for="nama">Nama</label>
        <input class="form-control" name="nama" required type="text" placeholder="Isikan Nama Lengkap">
    </div>
    <!-- Username -->
    <div class="form-group">
        <label for="username">Username</label>
        <input class="form-control" name="username" required type="text" placeholder="Isikan Username">
    </div>
    <!-- Email -->
    <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" name="email" required type="text" placeholder="Isikan Email">
    </div>
    <!-- No Telephone -->
    <div class="form-group">
        <label for="no_hp">No Handphone</label>
        <input class="form-control" name="no_hp" required type="text" maxlength="14" placeholder="+6281229******">
    </div>
    <!-- Kata Sandi -->
    <div class="form-group">
        <label for="passwordd">Password</label>
        <input class="form-control" name="passwordd" required type="password">
    </div>

    </br>
    <button class="btn btn-primary" type="reset" name="reset" href="index.php">Reset</button>
    <button class="btn btn-success" type="submit" name="submit">Registrasi</button>
</form>