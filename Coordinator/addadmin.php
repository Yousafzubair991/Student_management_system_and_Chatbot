
<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>

<?php include('head.php') ?>

<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.main {
  margin-left: 260px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}



</style>

 <section class="main_full inner_page">
        <div class="container-fluid topnav">
          <div class="row">
             <div class="full">
<br>
<a href="coorddash.php" ><i class="fa fa-fw fa-home"></i>DASHBOARD</a>
<a href="addstudent.php" ><i class="fa fa-plus-square"></i>INSERT STUDENT DETAIL</a>
<a href="updatestudent.php" ><i class="fa fa-edit"></i></i>UPDATE STUDENT DETAIL</a>
<div class="dropdown">
  <button class="dropbtn">MANAGE STUDENT FEE</button>
  <div class="dropdown-content">
    <a href="addfee.php" ><i class="fa fa-edit"></i></i>Add Fee Status</a>
    <a href="deletefee.php" ><i class="fa fa-edit"></i></i>Delete Fee Status</a>
    <a href="updatestudentfee.php" ><i class="fa fa-edit"></i></i>Update Fee Status</a>
    <a href="Searchfee.php" ><i class="fa fa-search"></i>Search Student Fee</a>
  </div>
</div>
<a href="addcourse.php" ><i class="fa fa-plus-square"></i>ADD COURSE</a>
<a href="deletecourse.php" ><i class="fa fa-minus-square"></i>REMOVE COURSE</a>
<a href="enrolllist.php" ><i class="fa fa-search"></i>ENROLLED STUDENTS</a>
<br><br><br>
<a href="deletestudent.php" ><i class="fa fa-minus-square"></i>DELETE STUDENT DETAIL</a>
<a href="Searchstudents.php" ><i class="fa fa-search"></i>SEARCH STUDENT</a>
<a href="addadmin.php" class="active"><i class="fa fa-plus-square"></i>ADD ADMIN</a>
<a href="timetableupload.php" ><i class="fa fa-plus-square"></i>UPLOAD FILES</a>
<a href="uploadresult.php" ><i class="fa fa-plus-square"></i>UPLOAD RESULT</a>
<a href="updatepwd.php" ><i class="fa fa-edit"></i></i>CHANGE PASSWORD</a>
<br><br><br><br><br><br><br><br><br><br><br><br>
             </div>
          </div>
        </div>
      </section>
<div class="container">
	<div >
		<div >
			<h2 class="text-center">ADD ADMIN</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				 
				  <div class="form-group">
				    Username:<input type="text" class="form-control" name="username" placeholder="Enter Username here" required >
				  </div>
				  <div class="form-group">
				    
				    Password:<input type="text" class="form-control" name="password" placeholder="Create a password" required>
				  </div>
				 
				  <div class="form-group">
				    Employee no. : <input type="text" class="form-control" name="employee_no" placeholder="Enter Registered employee no." required>
				  </div>
				  
				  <div class="form-group">
				    
				    Name:<input type="text" class="form-control" name="name" placeholder="Enter name:" required>
				  </div>
				  
				   <div class="form-group">
				    Father Name:<input type="text" class="form-control" name="father_name" placeholder="Enter Father name" required>
				  </div>
				 
				  <div class="form-group">
				    CNIC:<input type="text" class="form-control" name="cnic" placeholder="Enter CNIC" required>
				  </div>

				    <div class="form-group">
				    Phone:<input type="text" class="form-control" name="phone" placeholder="Enter Phone No." required>
				  </div>

				  <div class="form-group">
				    
				    Email:<input type="text" class="form-control" name="email" placeholder="Enter Email:" required>
				  </div>
				  
				  <div class="form-group">
				    
				    Age:<input type="text" class="form-control" name="age" placeholder="Enter age:" required>
				  </div>
				 
				 <div class="form-group">
				    Qualification:<input type="text" class="form-control" name="qualification" placeholder="Enter highest qualification here" >
				  </div>

				  <div class="form-group">
				    Designation:<input type="text" class="form-control" name="designation" placeholder="Enter designation here" >
				  </div>

				  <div class="form-group">
				    Address:<input type="text" class="form-control" name="address" placeholder="Enter Address" >
				  </div>

				  
				  <button type="submit" name="submit" class="button">Insert</button><br><br>
			</form>
		</div>
	</div>
</div>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['username']) && !empty($_POST['password'])) {
		
			include ('dbcon.php');
			

			
			$username=$_POST['username'];
			$password=$_POST['password'];
			$employee_no=$_POST['employee_no'];
			$name=$_POST['name'];
			$father_name=$_POST['father_name'];
			$cnic=$_POST['cnic'];
			$phone=$_POST['phone'];
			$email=$_POST['email'];
			$age=$_POST['age'];
			$qualification=$_POST['qualification'];
			$designation=$_POST['designation'];
			$address=$_POST['address'];
			

			$sql = "INSERT INTO `admin`( `username`, `password`, `employee_no`, `name`,`father_name`, `cnic`,`phone`, `email`, `age`, `qualification`, `designation`, `address`) VALUES ('$username','$password','$employee_no','$name','$father_name','$cnic','$phone','$email','$age','$qualification','$designation','$address')";

			$run = mysqli_query($conn,$sql);

			if ($run == true) {
				
				?>
				<script>
					alert("Data Inserted Successfully");
				</script>
				<?php
			} else {
				echo "Error : ".$sql."<br>". mysqli_error($conn); 
			}
		} else {
				?>
				<script>
					alert("Please insert username and password");
				</script>
				<?php
		}


	}

 ?>








