<?php
$link = mysqli_connect("localhost", "root", "");
$dbname = "lat dbase";
$cek = mysqli_query($link, $query, $resultmode = "CREATE DATABASE $dbname")
  or die("Gagal Membuat Database : $dbname");

if ($cek) {
  echo " Database $dbname berhasil dibuat";
}
