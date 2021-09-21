
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
<a href="addstudent.php" class="active"><i class="fa fa-plus-square"></i>INSERT STUDENT DETAIL</a>
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
<a href="addadmin.php" ><i class="fa fa-plus-square"></i>ADD ADMIN</a>
<a href="timetableupload.php" ><i class="fa fa-plus-square"></i>UPLOAD FILES</a>
<a href="uploadresult.php" ><i class="fa fa-plus-square"></i>UPLOAD RESULT</a>
<a href="updatepwd.php" ><i class="fa fa-edit"></i></i>CHANGE PASSWORD</a>
<br><br><br><br><br><br><br><br><br><br><br><br>
             </div>
          </div>
        </div>
      </section>


<div class="container99">
		<div class="center">
		<div class="col-md-6 col-md-offset-3  jumbotron ">

			<h2 class="text-center">ADD STUDENT</h2>
	<p style="color: red">*Please enter data in every field to Add Student to the system.</p><br><br>

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      Roll No.:<input type="text" class="form-control" name="roll" placeholder="Enter Roll No." >
				  </div>
				  <div class="form-group">
				    
				    Full name:<input type="text" class="form-control" name="name" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      Father name <input type="text" class="form-control" name="fname" placeholder="Enter Father_name:">
				  </div>
				  <div class="form-group">
				    
				    City:<input type="text" class="form-control" name="city" placeholder="Enter City:" required>
				  </div>
				  <div class="form-group">
				    
				    Email:<input type="text" class="form-control" name="email" placeholder="Enter Email:" required>
				  </div>

				   <div class="form-group">
				    Semester:<input type="text" class="form-control" name="semester" placeholder="Enter Semester" >
				  </div>
				  <div class="form-group">
				    
				    Session:<input type="text" class="form-control" name="session" placeholder="Enter Session" required>
				  </div>
				  <div class="form-group">
				     Section: <input type="text" class="form-control" name="section" placeholder="Enter Section" required>
				  </div>
				  <div class="form-group">
				    
				    Phone:<input type="text" class="form-control" name="phone" placeholder="Enter Phone No." required>
				  </div>
				  <div class="form-group">
				    
				    CNIC:<input type="text" class="form-control" name="cnic" placeholder="Enter Student CNIC" required>
				  </div>
				  <div class="form-group">
				    Address:<input type="text" class="form-control" name="address" placeholder="Enter Address" >
				  </div>
				  <div class="form-group">
				    
				    Gender:<input type="text" class="form-control" name="gender" placeholder="Enter Gender:" required>
				  </div>
				  <div class="form-group">
				    Password: <input type="text" class="form-control" name="password" placeholder="Enter Password for initial Login" required>
				  </div>
				  
				  <button type="submit" name="submit" class="button">Insert</button>
			</form>
		</div>
	

<?php include('footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['name'])) {
		
			include ('dbcon.php');
			

			$roll=$_POST['roll'];
			$name=$_POST['name'];
			$city=$_POST['city'];
			$email=$_POST['email'];
			$semester=$_POST['semester'];
			$fname=$_POST['fname'];
			$phone=$_POST['phone'];
			$cnic=$_POST['cnic'];
			$address=$_POST['address'];
			$section=$_POST['section'];
			$session=$_POST['session'];
			$gender=$_POST['gender'];
			$password=$_POST['password'];
			

			$sql = "INSERT INTO `student`( `rollno`, `name`, `city`, `email`,`semester`, `Father_name`,`phone`, `cnic`, `address`, `section`, `session`,`gender`, `password`) VALUES ('$roll','$name','$city','$email','$semester','$fname','$phone','$cnic','$address','$section','$session','$gender','$password')";

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
					alert("Please insert atleast roll no. and fullname");
				</script>
				<?php
		}


	}

 ?>








