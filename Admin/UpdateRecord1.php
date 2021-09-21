<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>
<?php 
error_reporting(0);
	include('dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from admin where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

  while ($data_row = mysqli_fetch_assoc($result))
  {
	    $update_id = $data_row['id']; 
		$username=$data_row['username'];
		$password=$data_row['password'];
	}

 ?>

<?php include('header.php') ?>
<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">CHANGE ADMIN PASSWORD</h2>
			<form action="UpdateRecord1.php?update_id=<?php echo $update_id;?>" method="post">
				    
				    <div class="form-group">

				    Username:<input type="text" class="form-control" name="username"  value="<?php echo 
				      $username;?>" placeholder="Enter username:" readonly>
				  </div>

				  <div class="form-group">
				    New Password: <input type="text" class="form-control" name="password" value="<?php echo 
				      $password;?>" placeholder="Enter Password for initial Login" >
				  </div>
				  

				  <button type="submit" name="submit" class="btn btn-success btn-lg" style="width: 100%; background-color: #5F9EA0" onclick="window.location.href = 'updatepwd.php'">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$username=$_POST['username'];
			$password=$_POST['password'];

			$sql = "UPDATE admin SET username = '$username',password = '$password' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatepwd.php");

			}


		}

	}

 ?>
