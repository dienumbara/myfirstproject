<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'dien_database';
$databaseUsername = 'root';
$databasePassword = '';
 
//$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

/*
$server = "localhost";
$user = "admin";
$pass = "password";
$database = "dien_database";
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
*/
?>
