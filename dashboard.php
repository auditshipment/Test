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

<div class="content-wrapper">
	<div class="container-fluid">
		
       <?php $result=mysqli_query($conn,"select *from images") or die(mysqli_error($conn));
       $i=3;
        while($row=mysqli_fetch_array($result)) { 
          if($i%3==0){
          	echo ($i!=3)?'</div>':'';
          	echo '<div class="row" style="margin-top:20px;">';
          }
        	?> 
       <div class="col-md-4">
       	<img src="gallery/<?php echo $row['filename']; ?>" width='300'/>
       </div>          
<?php

           $i++; } ?>

		</div>
	</div> <!-- container fluid ends -->
</div> <!-- wraper ends -->












</div>

<?php
include 'footer.php';

?>