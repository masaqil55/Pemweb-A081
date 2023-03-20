<?php
function connection() {
    //membuat koneksi ke database local
    $dbhost = 'localhost';
    $dbUser = 'root';
    $dbPass = "";
    $dbName = "classicmodels";

    $conn = mysqli_connect($dbhost, $dbUser, $dbPass);

    if($conn) {
        $open = mysqli_select_db($conn, $dbName);
        echo "Database Terhubung";
        if (! $open) {
            echo "Database Tidak Dapat Terhubung";
        }
        return $conn;

    } else {
        echo "MySQL Tidak Terhubung";
    }
}
?>