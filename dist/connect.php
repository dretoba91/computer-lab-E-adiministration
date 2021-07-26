<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aitajmer";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// close connection

// mysqli_close($conn);

// mysqli_connect("localhost","root","" )  or die(mysql_error());
		
// mysqli_select_db("aitajmer",) or die(mysql_error());
?>