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
<a href="studentdash.php"  ><i class="fa fa-fw fa-home"></i> DASHBOARD</a>
<a href="enrollcourse.php" ><i class="fa fa-plus-square"></i> ADD COURSE</a>
<a href="dropcourse.php"  class="active"><i class="fa fa-minus-square"></i> VIEW/DROP COURSE</a>
<a href="addfee.php" ><i class="fa fa-plus-square"></i> ADD FEE</a>
<br><br><br>
<a href="updatestudent.php" ><i class="fa fa-plus-square"></i>  UPDATE PROFILE</a>
<a href="Searchfee.php" ><i class="fas fa-eye"></i> VIEW FEE STATUS</a>
<a href="timetableupload.php" ><i class="fas fa-eye"></i> VIEW TIME TABLE</a>
<a href="uploadresult.php" ><i class="fas fa-eye"></i> VIEW RESULT</a>
<a href="updatepwd.php" ><i class="fas fa-exchange-alt"></i> CHANGE PASSWORD</a>
<br><br><br>
             </div>
          </div>
        </div>
      </section> 
<div class="container99">
		<div class="center">
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<br><br><h2 class="text-center">View/Drop Course</h2><br><br>
	<p style="color: red">*Please enter your roll number and the pincode to proceed.</p>
			<div  style="text-align: center;">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
                 <input type="text" name="rollno" placeholder="Enter Roll Number here" style="width: 240px;height: 35px;"><span>
                <input type="password" name="password" placeholder="Enter Pin Code here" style="width: 240px;height: 35px;">
				<input type="submit" name="search" value="SEARCH" class="button">
			</form>
			</div>
		</div>
	</div>


<table class="table table-striped table-bordered table-responsive center">

	<tr>
	
		<th class="text-center">Roll No</th>
      <th class="text-center">Credit Hours</th>
       <th class="text-center">Course Code</th>
    <th class="text-center">Course Name</th>
    <th class="text-center">Semester</th>
		<th class="text-center">Drop Course</th>

	</tr>
<?php 
	include('dbcon.php');
	if (isset($_POST['search'])) {

         $rollno = $_POST['rollno'];
        $password= $_POST['password'];

        $sql = "SELECT * FROM `addcourse` WHERE `rollno` = '$rollno' AND `password` = '$password' ";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				 $Id = $DataRows['id'];
			  $rollno=$DataRows['rollno'];
       $courseCredit=$DataRows['courseCredit'];
         $courseCode=$DataRows['courseCode'];
      $courseName=$DataRows['courseName'];
      $semester=$DataRows['semester'];
              $password= $_POST['password'];
                ?>
				<tr>
					<td><?php echo $rollno; ?></td>
          <td><?php echo $courseCredit; ?></td>
          <td><?php echo $courseCode; ?></td>
          <td><?php echo $courseName; ?></td>
          <td><?php echo $semester; ?></td>
					<td><a href="deleterecord.php?Delete=<?php echo $Id; ?>" class="btn btn-danger">Drop Course</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='14' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>
	

</table>
</div>

<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['deleted']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('footer.php') ?>