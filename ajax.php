<?php
session_start();
if(isset($_SESSION['email'])){
}else{
	header('location: index.php?error=Please Login to continue');
}

include 'header.php';
include 'config.php';
?>

 <div id="wrapper">

<?php  include 'menu.php'; ?>



<div class="container-fluid">
<div class="content-wrapper">
<div class="row">
				<div class="col-md-12">
<input type="text" name="email" class="email" id="email">
<h3 id="messagedisplay"></h3>
</div>
</div>
</div>






</div>
</div>

<?php
include 'footer.php';

?>


<script type="text/javascript">

$(document).ready(function(){


$('#email').on('keyup',function(){
var email=$(this).val();

$.ajax({

url:'emailcheck.php',
method: 'POST',
data: {email:email},
success: function(s){
var response=JSON.parse(s);

if(response.valid=='true'){

$('#messagedisplay').html("Email Already Exists");

}else{
$('#messagedisplay').html("");
}

}

});



});




});



</script>