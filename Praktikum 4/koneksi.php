<?php
$host="localhost"; ///yang berisi nama host tempat database berasal //
$username="root"; //variable username myqql root ini merupakan nilai default 
$password=""; //variable "" disebut variable kosong karena nilai ini merupakan nilai default untuk database MySQL
$databasename="praktikum4"; ///yang berisi nama database yang ingin dituju misal akademik
$con=@mysqli_connect($host,$username,$password,$databasename); //mysqli_connect mencoba untuk terhubung ke database sesuai dengan  value dari variable //($host,$username,$password,$databasename) merupakan variable yang digunakan 
if (!$con) {
 echo "Error: " . mysqli_connect_error(); //mysqli huruf i merupakan improved versi update dari MySQL 
exit(); //menutup/mengakhiri koneksi ke database
}
?>