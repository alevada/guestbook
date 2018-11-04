<?php

$host = "localhost";
$username = "ale";
$password = "ale";
$db_name = "guestbook";
$tbl_name = "gbook";


$con=mysqli_connect($host, $username, $password, $db_name)or die("cannot connect server");

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO $tbl_name (name, email, message) VALUES ('$name', '$email', '$message')";
//sau asa > $sql = 'INSERT INTO '.$tbl_name.' (name, email, message) VALUES ("'.$name.'", "'.$email.'", "'.$message.'")';


$result=mysqli_query($con, $sql);




if ($result) {
	header('Location: http://localhost/guestbook?success');
  exit;
}
else {
	header('Location: http://localhost/guestbook?error');
	exit;}
mysqli_close($con);









?>