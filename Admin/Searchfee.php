
<?php
//include header part of html
 include('head.php')
  ?>
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
<a href="admindash.php" ><i class="fa fa-fw fa-home"></i>DASHBOARD</a>
<a href="addstudent.php"><i class="fa fa-plus-square"></i>INSERT STUDENT DETAIL</a>
<a href="updatestudent.php" ><i class="fa fa-edit"></i></i>UPDATE STUDENT DETAIL</a>
<div class="dropdown">
  <button class="dropbtn">MANAGE STUDENT FEE</button>
  <div class="dropdown-content">
    <a href="addfee.php" ><i class="fa fa-edit"></i></i>Add Fee Status</a>
    <a href="deletefee.php" ><i class="fa fa-edit"></i></i>Delete Fee Status</a>
    <a href="updatestudentfee.php" ><i class="fa fa-edit"></i></i>Update Fee Status</a>
    <a href="Searchfee.php" class="active"><i class="fa fa-search"></i>Search Student Fee</a>
  </div>
</div>
 <br><br>
 <a href="deletestudent.php" ><i class="fa fa-minus-square"></i>DELETE STUDENT DETAIL</a>
<a href="Searchstudents.php"><i class="fa fa-search"></i>SEARCH STUDENT</a>
<a href="updatepwd.php" ><i class="fa fa-edit"></i></i>CHANGE PASSWORD</a>  
 <br><br><br><br><br><br><br><br><br><br><br><br><br>
             </div>
          </div>
        </div>
      </section>

           <div class="container99" >
  <div class="center" >
    <div class="col-md-6 col-md-offset-3  jumbotron ">
                            <br><br><h2>Search Student Fee Details</h2><br><br>
                            <form action="Searchfee.php" method="post">
                <input type="text" name="rollno" placeholder="Enter Roll Number" style="width: 240px;height: 35px;"><span>OR/AND<span>
                 <select name="semester"  >
                                    <option>SELECT SEMESTER</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                  <input type="submit" name="show" value="SHOW INFO" class="button" >  
                            </form>
                        </div>
                    </div>
                </div>
            

<table class="table table-striped table-bordered table-responsive center">
    <tr >
		<th class="text-center">Roll No.</th>
		<th class="text-center">Full Name</th>
		<th class="text-center">Challan_No</th>
		<th class="text-center">Fee_Amount</th>
		<th class="text-center">Semester</th>
		<th class="text-center">Status</th>
		<th class="text-center">Upload Image</th>

        
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $semester = $_POST['semester'];
        $rollno = $_POST['rollno'];

        $sql = "SELECT * FROM `fee` WHERE `semester` = '$semester' OR `rollno`='$rollno'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
     	$Id = $DataRows['id'];
				$RollNo = $DataRows['rollno'];
				$Name = $DataRows['name'];
				$Challan_No = $DataRows['challan_no'];
				$Fee_Amount = $DataRows['fee_amount'];
				$Semester = $DataRows['semester'];
				$Status = $DataRows['status'];
				$ProfilePic = $DataRows['image'];
				?>
				<tr>
					<td><?php echo $RollNo;?></td>
					<td><?php echo $Name; ?></td>
					<td><?php echo $Challan_No; ?></td>
					<td><?php echo $Fee_Amount; ?></td>
					<td><?php echo $Semester; ?></td>
					<td><?php echo $Status; ?></td>
					<td><img src="../databaseimg/<?php echo $ProfilePic;?>" alt="img"></td>

					</tr>
     
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='13' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
    


<!--include header part of html-->
<?php include('footer.php') ?>