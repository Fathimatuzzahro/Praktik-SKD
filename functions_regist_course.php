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
    $passwordd1 = md5($data["passwordd1"]);
    
    $query = "INSERT INTO tb_extrakulikuler(id, username, email, passwordd1 ) 
    VALUES( '', '$username', '$email', '$passwordd1' )";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>
