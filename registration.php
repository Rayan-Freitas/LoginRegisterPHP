<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];  //linkando a variável user do Input no HTML
$pass = $_POST['password'];   // linkando a ao Input Password

$s = " select * from usertable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1) {
	echo "username Already Taken";
}else{
	$reg= " insert into usertable(name , password) values ('$name' , '$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successful";
}




?>