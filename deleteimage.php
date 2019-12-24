<?php

include 'config.php';

if(isset($_GET['id'])){

	$id=$_GET['id'];
	if(mysqli_query($conn,"delete from images where imageid='$id'")){
		header('location: manageimage.php');
	}
}

?>