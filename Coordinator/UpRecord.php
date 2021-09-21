<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>
<?php 
error_reporting(0);
	include('dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from fee where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

  while ($data_row = mysqli_fetch_assoc($result))
  {
	    $update_id = $data_row['id']; 
	    $rollno=$data_row['rollno'];
	    $name=$data_row['name'];
	    $challan_no=$data_row['challan_no'];
		$fee_amount=$data_row['fee_amount'];
		$semester=$data_row['semester'];
		$status=$data_row['status'];
	}

 ?>

<?php include('header.php') ?>
<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE FEE DETAILS</h2>
			<form action="UpRecord.php?update_id=<?php echo $update_id;?>" method="post">
				 <div class="form-group">
				      Roll No.:<input type="text" class="form-control" name="rollno" value="<?php echo 
				      $rollno;?>" placeholder="$rollno">
				  </div>
				  <div class="form-group">
				    
				    Full name:<input type="text" class="form-control" name="name" value="<?php echo 
				      $name;?>"  placeholder="full name" required >
				  </div>
				  <div class="form-group">
				    
				    Challan_no:<input type="text" class="form-control" name="challan_no"  value="<?php echo 
				      $challan_no;?>" placeholder="Enter challan_no:" >
				  </div>
				  <div class="form-group">
				    
				    Fee_Amount:<input type="text" class="form-control" name="fee_amount"  value="<?php echo 
				      $fee_amount;?>" placeholder="Enter fee_amount:" >
				  </div>

				   <div class="form-group">
				    Semester:<input type="text" class="form-control" name=" semester"  value="<?php echo 
				      $semester;?>" placeholder="Enter Semester" >
				  </div>
				  <div class="form-group">
				    
				    Status:<input type="text" class="form-control" name="status" value="<?php echo 
				      $status;?>" placeholder="Enter Status" >
				  </div>
				  
				  <button type="submit" name="submit" class="btn btn-success btn-lg" onclick="window.location.href = 'updatestudentfee.php'">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['rollno']) && !empty($_POST['name'])) {
		
			include ('dbcon.php');
			$id = $_GET['update_id'];
			$rollno=$_POST['rollno'];
			$name=$_POST['name'];
			$challan_no=$_POST['challan_no'];
			$fee_amount=$_POST['fee_amount'];
			$semester=$_POST['semester'];
			$status=$_POST['status'];
		

			$sql = "UPDATE fee SET rollno = '$rollno', name = '$name', challan_no='$challan_no', fee_amount = '$fee_amount', semester = '$semester', status = '$status' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatestudentfee.php");

			}


		}

	}

 ?>
