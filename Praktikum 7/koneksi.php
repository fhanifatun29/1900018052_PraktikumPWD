<?php
// nama host, username mysql, dan password mysql serta nama database
$host = "localhost"; // berisi nama host tempat database berasal
$username = "root"; //variable username mysql root ini merupakan nilai default
$password = ""; //variable kosong karena nilai ini merupakan nilai default untuk database mysql
$databasename = "akademik"; //nama database yang ingin dituju misal akademik

// membuat koneksi dengan menghubungkan variabel nama hostm username dan password mysql, serta nama database
$con = @mysqli_connect($host, $username, $password, $databasename);

// untuk mengecek koneksi
if (!$con) {
    echo "Error: " . mysqli_connect_error();//mysqli huruf i merupakan improved versi update dari MySQL 
    exit(); //menutup/mengakhiri koneksi ke database
}
?>