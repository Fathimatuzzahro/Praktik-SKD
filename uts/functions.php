<?php
    function registrasi($data) {
        global $conn;
        $username = strtolower($data["username"]);
        $password = mysqli_escape_string($conn, $data["password"]);
        // $password2 = mysqli_escape_string($conn, $data["password2"]);
        // $level = mysqli_escape_string($conn, $data["level"]);

        $result = mysqli_query($conn, "SELECT username FROM uts WHERE username = '$username'");
        
        if(mysqli_fetch_assoc($result)) {
            echo "
                <script>
                    alert('Username Sudah Terdaftar');
                </script>
            ";

            return false;
        }

        // if($password != $password2) {
        //     echo "
        //         <script>
        //             alert('Konfirmasi Password Tidak Sama');
        //         </script>
        //     ";

        //     return false;
        // } else {
        //     $password = password_hash($password, PASSWORD_DEFAULT);
        //     // $password2 = password_hash($password, PASSWORD_DEFAULT);
        //     // var_dump($password);
        //     mysqli_query($conn, "INSERT INTO user VALUES ('', '$email', '$password', '$level')");
        //     return mysqli_affected_rows($conn);
        // }
    }
?>