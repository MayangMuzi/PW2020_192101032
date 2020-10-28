<?php
$con = mysqli_connect("localhost", "root", "");
if (!$con) {
  die('Could not connect: ' . mysqli_error());
}
mysqli_select_db("lat_dbase", $con);
mysqli_query("DELETE FROM tbl_mhs WHERE LastName='Prabowo'");
