<?php

include 'config.php';


if(isset($_POST['email'])){

$email=$_POST['email'];

$query="select * from users where email='$email'";
$res=mysqli_query($conn,$query);

if(mysqli_num_rows($res)!=0){
echo json_encode(array("valid"=>"true"));
}else{
echo json_encode(array("valid"=>"false"));
}


}


mysqli_close($conn);

?>