<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "test123";
  $db = "";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
$sql = "CREATE DATABASE calci";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
	echo "<br>";
}
 $db = "calci";
 
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
  
?>
