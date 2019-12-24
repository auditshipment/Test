<?php
session_start();
include 'config.php';


//getting fileds from post

if(isset($_POST)){
$name=$_POST['name'];
$email=$_POST['email'];
$password=md5($_POST['password']);

$checkQuery=mysqli_query($conn,"select count(*) as count from users where email='$email'");
$checkResult=mysqli_fetch_array($checkQuery);
if($checkResult['count']==0){
$query="insert into users(name,email,password) values('$name','$email','$password')";

if(mysqli_query($conn,$query)){

$_SESSION['email']=$email;
$_SESSION['name']=$name;
header('location:dashboard.php');
}else{
header('location: signup.php?error=Please try again later');
}
}else{
	header('location: index.php?error=Email already exists Please login');
}
}else{
	header('location: signup.php');
}


?>