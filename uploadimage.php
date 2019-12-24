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
		<div class="row">
			<div class="col-md-6 offset-md-3">
           <div class="card">
           <div class="card-body">
           <div class="card-title">Upload New Image</div>
           <hr>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            		<?php if(isset($_GET['error'])){
					    		?>
					    		<div class="alert alert-danger"><h5 class="text-center"><?php echo $_GET['error']; ?></h5> </div>
					    	<?php } ?>
					    	
           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name">
           </div>
           <div class="form-group">
            <label for="input-1">Choose Ur Image</label>
            <input type="file" class="form-control" id="input-2" placeholder="Enter Your Name" name="imageupload" accept="image/jpg,image/png">
           </div>
           <div class="form-group text-center">
            <input type="submit" class="btn btn-light px-5" value="Upload" />
          </div>
          </form>
         </div>
         </div>
     </div>
     </div>
</div>
</div>












</div>

<?php
include 'footer.php';

?>