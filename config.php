<?php

$server = "localhost";
$user = "anubis";
$password = "jokarto";
$nama_database = "percobaan";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>
