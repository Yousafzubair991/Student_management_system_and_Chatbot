
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
<a href="addcourse.php" class="active"><i class="fa fa-plus-square"></i>ADD COURSE</a>
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
			<h2 class="text-center">ADD COURSE</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				 
				  <div class="form-group">
				    Course Code:<input type="text" class="form-control" name="courseCode" placeholder="Enter Course Code here" required >
				  </div>
				  <div class="form-group">
				    
				    Course Name:<input type="text" class="form-control" name="courseName" placeholder="Enter Course Name here" required>
				  </div>
				 
				  <div class="form-group">
				    Course Credit: <input type="text" class="form-control" name="courseCredit" placeholder="Enter Course Credit hours here" required>
				  </div>
				  
				  <div class="form-group">
				    
				    Semester:<input type="text" class="form-control" name="semester" placeholder="Enter semester here" required>
				  </div>
				 
				  <button type="submit" name="submit" class="button">Insert</button><br><br>
			</form>
		</div>
	</div>
</div>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['courseCode']) && !empty($_POST['courseName'])) {
		
			include ('dbcon.php');
			

			
			$courseCode=$_POST['courseCode'];
			$courseName=$_POST['courseName'];
			$courseCredit=$_POST['courseCredit'];
			$semester=$_POST['semester'];
			

			$sql = "INSERT INTO `course`( `courseCode`, `courseName`, `courseCredit`, `semester`) VALUES ('$courseCode','$courseName','$courseCredit','$semester')";

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
					alert("Please insert Code and name.");
				</script>
				<?php
		}


	}

 ?>
