<?php
session_start();
include 'config.php';


//getting fileds from post

if(isset($_POST)){

$email=$_POST['email'];
$password=md5($_POST['password']);

$query="select *from users where email='$email' and password='$password' limit 1";
$result=mysqli_query($conn,$query);

//retrive data from result object
if(mysqli_num_rows($result)!=0){

$data=mysqli_fetch_array($result);
$_SESSION['email']=$data['email'];
$_SESSION['name']=$data['name'];
header('location:dashboard.php');
}else{
header('location: index.php?error=Please Enter Valid Login Credentials');
}

}else{
	header('location: index.php');
}


?>