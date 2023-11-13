<?php
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="";
  $dbname="sanashtech";

  $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn) {
  // code...
  die("Could not connect to the database".mysqli_connect_error());
}
 ?>
