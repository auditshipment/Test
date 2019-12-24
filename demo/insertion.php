<?php
$conn=mysqli_connect("localhost","root","","project");
if (isset($_POST['submit']))
{
$email=$_POST['email'];
$password=$_POST['psw'];


$sql="INSERT INTO signup (email, psw)
      VALUES ('$email','$psw')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "Inserted";
}
else
{
	echo "Not inserted";
}
}
?>