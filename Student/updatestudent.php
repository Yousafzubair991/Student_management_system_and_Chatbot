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
<a href="studentdash.php" class="active" ><i class="fa fa-fw fa-home"></i> DASHBOARD</a>
<a href="enrollcourse.php" ><i class="fa fa-plus-square"></i> ADD COURSE</a>
<a href="dropcourse.php" ><i class="fa fa-minus-square"></i> VIEW/DROP COURSE</a>
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

<div class="container99" >
	<div class="center" >
		<div class="col-md-6 col-md-offset-3  jumbotron ">
			<br><br>
<h2 class="text-center">UPDATE STUDENT DETAIL</h2><br><br>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data" >
				<center><input type="text" name="email" placeholder="Enter Email here" style="width: 240px;height: 35px;"><span>
                <input type="password" name="password" placeholder="Enter Current password here" style="width: 240px;height: 35px;">
				<input type="submit" name="search" value="SUBMIT" class="button"> </center>
			</form>
			</div>
		</div>
	</div>

<?php
    echo  ErrorMessage();
    echo  SuccessMessage();
 ?>
<table class="table table-bordered table-striped table-responsive center">

	<tr class="center">
		<th class="text-center" width="210px">Email</th>
		<th class="text-center" width="110px">Password</th>
		<th width="110px">Update</th>
	</tr>
<?php 
	include('dbcon.php');
	if (isset($_POST['search'])) {

		
         $email = $_POST['email'];
        $password= $_POST['password'];

		$sql = "SELECT * FROM `student` WHERE `email` = '$email' AND `password` = '$password' ";
		$result = mysqli_query($conn,$sql);
		if (mysqli_num_rows($result)>0) {
			while ($DataRows = mysqli_fetch_assoc($result)) {
				$Id = $DataRows['id'];
			$email=$DataRows['email'];
			$password=$DataRows['password'];
				
				?>
				<tr class="text-center">
					<td width="234px"><?php echo $email; ?></td>
					<td width="110px"><?php echo $password; ?></td>
					
					<td width="110px"><a href="UpdateRecord.php?Update=<?php echo $Id; ?>" class="btn btn-danger">UPDATE</a></td>
				</tr>
				<?php
				
			}
			
		} else {
			echo "<tr><td colspan ='3' class='text-center'>No Record Found</td></tr>";
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