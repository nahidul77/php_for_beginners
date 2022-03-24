<?php

$db_host = "localhost";
$db_name = "cake_auth";
$db_user = "root";
$db_pass = "";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
    echo mysqli_connect_error();
    exit;
}

$sql = "SELECT *
        FROM users
        ORDER BY created;";

$results = mysqli_query($conn, $sql);

if ($results === false) {
    echo mysqli_error($conn);
} else {
    $users = mysqli_fetch_all($results, MYSQLI_ASSOC);

    var_dump($users);
}
