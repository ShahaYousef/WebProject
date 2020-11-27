<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["urnamr"];
$email = $_POST["uremail"];
$password = $_POST["password"];
}

$_SESSION["urnamr"] = $name;

$con = mysqli_connect("localhost", "root", "", "db")
or die (mysqli_connect_error());

mysqli_query($con,"CREATE TABLE IF NOT EXISTS userinfo(
   id INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (id),
   urnamr VARCHAR(30),
  uremail VARCHAR(30),
 password INT )")
or die( mysqli_connect_error());


$query = "INSERT INTO userinfo (urnamr, uremail, password ) VALUES ('$name', '$email', '$password' )";
mysqli_query($con , $query );



?>
