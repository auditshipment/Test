<?php
include 'config.php';

if (isset($_POST['name']) && isset($_FILES)) {


$name=$_POST['name'];
$filename=basename($_FILES["imageupload"]["name"]);
$filepath="gallery/".$filename;
if(move_uploaded_file($_FILES['imageupload']['tmp_name'], $filepath)){
	mysqli_query($conn,"insert into images(name,filename) values('$name','$filename')");
	header('location: dashboard.php');
}else{
  	header('location: uploadimage.php?error=something went wrong');
}	

}else{
		header('location: uploadimage.php?error=Please try again later');
}	



?>