<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>
<?php 

error_reporting(0);
	include('dbcon.php');
	$update_record= $_GET['Update'];
	$sql = "select * from student where id = '$update_record'";
	$result = mysqli_query($conn,$sql);

  while ($data_row = mysqli_fetch_assoc($result))
  {
	    $update_id = $data_row['id']; 
		  $rollno=$data_row['rollno'];
	    $name=$data_row['name'];
	    $city=$data_row['city'];
		$email=$data_row['email'];
		$semester=$data_row['semester'];
		$Father_name=$data_row['father_name'];
		$phone=$data_row['phone'];
		$cnic=$data_row['cnic'];
		$address=$data_row['address'];
		$gender=$data_row['gender'];
		$password=$data_row['password'];
	}

 ?>

<?php include('header.php') ?>
<?php include('admin.header.php') ?>

<div class="container jumbotron">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h2 class="text-center">UPDATE STUDENT DETAIL</h2>

			<form action="UpdateRecord.php?update_id=<?php echo $update_id;?>" method="post">
				    
				<div class="form-group">
				      Roll No.:<input type="text" class="form-control" name="rollno" value="<?php echo 
				      $rollno;?>" placeholder="$rollno" readonly>
				  </div>

				  <div class="form-group">
				    
				    Full name:<input type="text" class="form-control" name="name" value="<?php echo 
				      $name;?>"  placeholder="full name" required >
				  </div>
				  <div class="form-group">
				      Father_name <input type="text" class="form-control" name="father_name" value="<?php echo 
				      $Father_name;?>" placeholder="Enter father_name:" required>
				  </div>
				   <div class="form-group">
				    
				    City:<input type="text" class="form-control" name="city"  value="<?php echo 
				      $city;?>" placeholder="Enter City:" >
				  </div>

				    <div class="form-group">

				    Email:<input type="text" class="form-control" name="email"  value="<?php echo 
				      $email;?>" placeholder="Enter Email:" >
				  </div>
				   <div class="form-group">
				    Semester:<input type="text" class="form-control" name=" semester"  value="<?php echo 
				      $semester;?>" placeholder="Enter Semester" >
				  </div>
				    
				   	<div class="form-group">
				    Phone:<input type="text" class="form-control" name="phone" value="<?php echo 
				      $phone;?>" placeholder="Enter Phone No." >
				  </div>
				  <div class="form-group">
				    
				    CNIC:<input type="text" class="form-control" name="cnic"
				     value="<?php echo 
				      $cnic;?>"   placeholder="Enter Student CNIC" readonly>
				  </div>
				  <div class="form-group">
				    Address:<input type="text" class="form-control" name="address"  value="<?php echo 
				      $address;?>" placeholder="Enter Address" >
				  </div>
				  <div class="form-group">
				    
				    Gender:<input type="text" class="form-control" name="gender" value="<?php echo 
				      $gender;?>" placeholder="Enter Gender:" readonly>
				  </div>

				  <div class="form-group">
				  	<input type="hidden" class="form-control" name="password" value="<?php echo 
				      $password;?>" placeholder="Enter Password for initial Login" >
				  </div>

				  

				  <button type="submit" name="submit" class="button" onclick="window.location.href = 'updatestudent.php'">UPDATE</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php') ?>


<?php 
//This php code block is for editing the data that we got after clicking on update button
	if (isset($_POST['submit'])) {
		if (!empty($_POST['email']) && !empty($_POST['password'])) {
		
			include ('../dbcon.php');
			$id = $_GET['update_id'];
			$name=$_POST['name'];
			$city=$_POST['city'];
			$email=$_POST['email'];
			$semester=$_POST['semester'];
			$father_name=$_POST['father_name'];
			$phone=$_POST['phone'];
			$cnic=$_POST['cnic'];
			$address=$_POST['address'];
			$section=$_POST['section'];
			$gender=$_POST['gender'];
			$password=$_POST['password'];
$sql = "UPDATE student SET name = '$name', city='$city', email = '$email', semester = '$semester', father_name = '$father_name', phone = '$phone', cnic = '$cnic', address = '$address',gender = '$gender', password = '$password' WHERE id = '$id'";

			$Execute = mysqli_query($conn,$sql);

			if ($Execute) {
				 $_SESSION['SuccessMessage'] = " Data Updated Successfully";
                Redirect_to("updatestudent.php");

			}


		}

	}

 ?>
