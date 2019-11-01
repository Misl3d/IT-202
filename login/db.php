<?php
$host="sql1.njit.edu";
$database="pjz3";
$username="pjz3";
$password="SHO4jTiI8";

$con = mysqli_connect("sql1.njit.edu","pjz3","SHO4jTiI8","pjz3");


if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
