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
    $username = htmlspecialchars($data["username"]);
    $email = htmlspecialchars($data["email"]);
    $passwordd = sha1($_POST["passwordd"]);
  
    $query = "INSERT INTO tb_keamanandata_sha(id, username, email, passwordd ) 
    VALUES( '', '$username', '$email', '$passwordd' )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
