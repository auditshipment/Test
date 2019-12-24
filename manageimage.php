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
				<div class="col-md-12">
					<table class="table table-striped">
						<thead>
							<th>Id</th>
							<th>Name</th>
							<th>Image</th>
							<th>Edit</th>
							<th>Delete</th>
						</thead>
		   <?php $result=mysqli_query($conn,"select *from images") or die(mysqli_error($conn));

        while($row=mysqli_fetch_array($result)) {  ?>

           <tr>
           	<td><?php echo $row['imageid']; ?></td>
           	<td><?php echo $row['name']; ?></td>
           	<td><img src='gallery/<?php echo $row['filename']; ?>' width='100'/></td>
           	<td><a href="editimage.php?id=<?php echo $row['imageid']; ?>" ><i class="zmdi zmdi-edit"></i></a></td>
           	<td><a href="deleteimage.php?id=<?php echo $row['imageid']; ?>" ><i class="zmdi zmdi-delete"></i></a></td>
           </tr>

	<?php } ?>
	</table>
	  </div>
	</div>
	</div>
</div>




</div>

<?php
include 'footer.php';

?>