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
           	<td><i class="zmdi zmdi-edit"  style="cursor: pointer;" data-id='<?php echo $row['imageid']; ?>'></i></td>
           	<td><i class="zmdi zmdi-delete" style="cursor: pointer;" data-id='<?php echo $row['imageid']; ?>'></i></td>
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


<script type="text/javascript">
	

$('.zmdi-delete').on('click',function(){
var id=$(this).data('id');
window.location.href="deleteimage.php?id="+id;
});



</script>