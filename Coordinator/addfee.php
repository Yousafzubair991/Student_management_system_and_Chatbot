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
  <button class="dropbtn active">MANAGE STUDENT FEE</button>
  <div class="dropdown-content">
    <a href="addfee.php" class="active"><i class="fa fa-edit"></i></i>Add Fee Status</a>
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
  
			<h2 class="text-center">ADD FEE DETAILS</h2>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
				  <div class="form-group">
				      Roll No.:<input type="text" class="form-control" name="roll" placeholder="Enter Roll No." >
				  </div>
				  <div class="form-group">
				    
				    Full Name:<input type="text" class="form-control" name="fullname" placeholder="full name" required>
				  </div>
				  <div class="form-group">
				      Challan_No: <input type="text" class="form-control" name="challan_no" placeholder="Enter challan_no" required>
				  </div>
				  <div class="form-group">
				    
				    Fee_Amount:<input type="text" class="form-control" name="fee_amount" placeholder="Enter fee_amount" required>
				  </div>
				  <div class="form-group">
				    
				    Semester:<input type="text" class="form-control" name="semester" placeholder="Enter Student Semester" required>
				  </div>
				  <div class="form-group">
				    
				    Status:
				  
				  <select name="status"  >
                                    <option>SELECT</option>
                                    <option>Paid</option>
                                    <option>Unpaid</option>
                                </select>
</div>

				   <div class="form-group">
				    <p style="color: red">*Image must be smaller than 250 KB.</p>
				    Image:<input type="file" class="form-control" name="simg" required>
				  </div>

				  <button type="submit" name="submit" class="button">INSERT</button>
			</form>
		</div>
	</div>
</div>

<?php include('footer.php') ?>

<?php 

	if (isset($_POST['submit'])) {
		if (!empty($_POST['roll']) && !empty($_POST['fullname'])) {
		
			include ('dbcon.php');
			$roll=$_POST['roll'];
			$name=$_POST['fullname'];
			$challan_no=$_POST['challan_no'];
			$fee_amount=$_POST['fee_amount'];
			$semester=$_POST['semester'];
			$status=$_POST['status'];
			include('ImageUpload.php');

			$sql = "INSERT INTO `fee`( `rollno`, `name`, `challan_no`, `fee_amount`, `semester`,`status`,`image`) VALUES ('$roll','$name','$challan_no','$fee_amount',$semester,
			'$status','$imgName')";

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







