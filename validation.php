<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];  //linkando a variável user do Input no HTML
$pass = $_POST['password'];   // linkando a ao Input Password

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:home.php');
}else{
	header('location:login.php');
}




?>