<?php
//hostname or ip for server
$servername = 'localhost';

//username and password
$dbusername = 'root';
$dbpassword = '';
$link = mysqli_connect("$servername", "$dbusername", "$dbpassword")
  or die("Koneksi Database Gagal");

if ($link) {
  echo "Konekasi Berhasil";
}
