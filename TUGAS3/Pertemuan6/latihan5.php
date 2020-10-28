<?php
$con = mysqli_connect("localhost", "root", "abc123");
if (!$con) {
  die('Could not connect: ' . mysql_error());
}
$db_selected = mysqli_select_db("test_db", $con);
$sql = "SELECT * from Person WHERE Lastname='Mauzi'";
$result = mysqli_query($sql, $con);
print_r(mysqli_fetch_row($result));
mysqli_close($con);
