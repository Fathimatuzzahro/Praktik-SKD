<?php

//index.php

//error_reporting(E_ALL);

session_start();

if(isset($_SESSION["user_id"]))
{
	header("location:home.php");
}

include_once('functions.php');

$connect = new PDO("mysql:host=localhost; dbname=keamananschool", "root", "");

$message = '';
$error_user_name = '';
$error_user_email = '';
$error_user_password = '';

	$nama = '';
    $username = '';
    $email = '';
    $passwordd = '';
    $rolee = "user";
    $ket = "unlock";
    $no_hp = '';

// if(isset($_POST["register"]))
// {
// 	if(empty($_POST["user_name"]))
// 	{
// 		$error_user_name = "<label class='text-danger'>Enter Name</label>";
// 	}
// 	else
// 	{
// 		$user_name = trim($_POST["user_name"]);
// 		$user_name = htmlentities($user_name);
// 	}

// 	if(empty($_POST["user_email"]))
// 	{
// 		$error_user_email = '<label class="text-danger">Enter Email Address</label>';
// 	}
// 	else
// 	{
// 		$user_email = trim($_POST["user_email"]);
// 		if(!filter_var($user_email, FILTER_VALIDATE_EMAIL))
// 		{
// 			$error_user_email = '<label class="text-danger">Enter Valid Email Address</label>';
// 		}
// 	}

// 	if(empty($_POST["user_password"]))
// 	{
// 		$error_user_password = '<label class="text-danger">Enter Password</label>';
// 	}
// 	else
// 	{
// 		$user_password = trim($_POST["user_password"]);
// 		$user_password = password_hash($user_password, PASSWORD_DEFAULT);
// 	}

// 	if($error_user_name == '' && $error_user_email == '' && $error_user_password == '')
// 	{
// 		$user_activation_code = md5(rand());

// 		$user_otp = rand(100000, 999999);

// 		$data = array(
// 			':nama'			=>	$nama,
// 			':email'		=>	$email,
// 			':passwordd'	=>	$passwordd,
// 			':rolee' 		=>  $rolee,
// 			':ket'			=>	$ket,
// 			':no_hp'		=>	$no_hp
// 		);

// 		$query = "INSERT INTO user(id, nama, username, email, passwordd , rolee, ket, no_hp) 
// 		VALUES( '', '$nama', '$username', '$email',  '$passwordd', '$rolee', '$ket','$no_hp')";

// 		$statement = $connect->prepare($query);

// 		$statement->execute($data);

// 		if($connect->lastInsertId() == 0)
// 		{
// 			$message = '<label class="text-danger">Email Already Register</label>';
// 		}	
// 		else
// 		{
// 			$user_avatar = make_avatar(strtoupper($user_name[0]));

// 			$query = "
// 			UPDATE user 
// 			SET user_avatar = '".$user_avatar."' 
// 			WHERE id = '".$connect->lastInsertId()."'
// 			";

// 			$statement = $connect->prepare($query);

// 			$statement->execute();


// 			require 'class/class.phpmailer.php';
// 			$mail = new PHPMailer;
// 			$mail->IsSMTP();
// 			$mail->Host = 'smtpout.secureserver.net';
// 			$mail->Port = '80';
// 			$mail->SMTPAuth = true;
// 			$mail->Username = 'xxxxxxxx';
// 			$mail->Password = 'xxxxxxxx';
// 			$mail->SMTPSecure = '';
// 			$mail->From = 'tutorial@webslesson.info';
// 			$mail->FromName = 'Webslesson';
// 			$mail->AddAddress($user_email);
// 			$mail->WordWrap = 50;
// 			$mail->IsHTML(true);
// 			$mail->Subject = 'Verification code for Verify Your Email Address';

// 			$message_body = '
// 			<p>For verify your email address, enter this verification code when prompted: <b>'.$user_otp.'</b>.</p>
// 			<p>Sincerely,</p>
// 			';
// 			$mail->Body = $message_body;

// 			if($mail->Send())
// 			{
// 				echo '<script>alert("Please Check Your Email for Verification Code")</script>';

// 				header('location:email_verify.php?code='.$user_activation_code);
// 			}
// 			else
// 			{
// 				$message = $mail->ErrorInfo;
// 			}
// 		}

// 	}
// }
// ?>

<!-- <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> -->
<form method="post" action="send.php" enctype="multipart/form-data">

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

	<!-- Ketrangan -->
    <div class="form-group">
        <label for="ket">Keterangan</label>
        <input class="form-control" name="ket" required type="hidden">
    </div>

	<!-- Rolee -->
    <div class="form-group">
        <label for="rolee">Role</label>
        <input class="form-control" name="rolee" required type="hidden">
    </div>

    </br>
    <button class="btn btn-primary" type="reset" name="reset" href="index.php">Reset</button>
    <button class="btn btn-success" type="submit" name="submit">Registrasi</button>
</form>