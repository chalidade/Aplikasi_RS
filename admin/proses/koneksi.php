<?php

$host     = "localhost";
$username = "inggit";
$password = "inggit";
$db       = "bisa";

$connect  = mysqli_connect($host, $username, $password, $db);
$database = mysqli_select_db($connect, $db);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
