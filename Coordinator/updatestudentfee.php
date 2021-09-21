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
    <a href="addfee.php" ><i class="fa fa-edit"></i></i>Add Fee Status</a>
    <a href="deletefee.php" ><i class="fa fa-edit"></i></i>Delete Fee Status</a>
    <a href="updatestudentfee.php" class="active"><i class="fa fa-edit"></i></i>Update Fee Status</a>
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
<div class="container99" >
	<div class="center" >
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<br><br>
<h2 class="text-center">UPDATE FEE DETAILS</h2><br><br>

			<div  style="text-align: center;">
				<center>
					<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				Choose Semester: <select name="semester"  style="margin-right: 30px;">					
					<option>Select</option>
									
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
								</select>
				<input type="submit" name="search" value="SEARCH" class="button">
			</form>
			</center>
			</div>
		</div>
	</div>
</div>

<?php
    echo  ErrorMessage();
    echo  SuccessMessage();
 ?>
<table class="table table-bordered table-striped table-responsive center">
	
	<tr class="text-center center">
		
		<td class="text-center" width="50px">Roll No.</td>
		<td class="text-center" width="150px">Full Name</td>
		<td class="text-center" width="100px">Challan _No</td>
		<td class="text-center" width="100px">Fee_Amount</td>
		<td class="text-center" width="100px">Semester</td>
		<td class="text-center" width="50px">Status</td>
		<td class="text-center" width="400px">Paid_Slip</td>
		<td class="text-center" width="150px">Update</td>
	</tr>
<?php 
	include('dbcon.php');
	if (isset($_POST['search'])) {

		$semester = $_POST['semester'];

		$sql = "SELECT * FROM `fee` WHERE `semester` = '$semester'";

		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
				$rollno=$DataRows['rollno'];
			    $name=$DataRows['name'];
				$challan_no = $DataRows['challan_no'];
				$fee_amount = $DataRows['fee_amount'];
				$semester = $DataRows['semester'];
				$status = $DataRows['status'];
				$Paid_Slip = $DataRows['image'];
				?>
				<tr class="text-center center">
					<td width="50px"><?php echo $rollno;?></td>
					<td width="150px"><?php echo $name; ?></td>
					<td width="100px"><?php echo $challan_no; ?></td>
					<td width="100px"><?php echo $fee_amount; ?></td>
					<td width="100px"><?php echo $semester; ?></td>
					<td width="50px"><?php echo $status; ?></td>
					<td width="400px">
						<img src="../databaseimg/<?php echo $Paid_Slip;?>" alt="img"><br><br>
						<form action="UpdateImg.php" method="post" enctype="multipart/form-data">
							<input type="file" name="updateimg" style="float: left;" class="btn btn-info btn-sm">
							<input type="hidden" name="id" value="<?php echo $Id; ?>">
							<input type="submit" name="submitimg" value="UPDATE" class="btn btn-warning btn-sm" style="float: right;"><br>
						</form>
					</td>
					
					
					<td  width="150px"><a href="UpRecord.php?Update=<?php echo $Id; ?>" class="btn btn-warning btn-sm">UPDATE</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='24' class='text-center'>No Record Found</td></tr>";
		}
	}

 ?>
	

</table>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h2><?php echo @$_GET['updated']; ?></h2>
			</div>
		</div>
	</div>	



<?php include('footer.php');?>