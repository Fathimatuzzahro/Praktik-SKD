<?php

$conn = mysqli_connect('localhost', 'root','', 'keamananschool');

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $passwordd = md5($data["passwordd"]);
    $rolee = "user";
    $ket = "unlock";

    $query = "INSERT INTO user(id, nama, username, email, passwordd , rolee, ket) 
    VALUES( '', '$nama', '$username', '$email', '$passwordd', '$rolee', '$ket' )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
