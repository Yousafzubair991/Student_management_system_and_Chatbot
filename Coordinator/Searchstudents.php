
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
<a href="Searchstudents.php" class="active"><i class="fa fa-search"></i>SEARCH STUDENT</a>
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
                            <br><br><h2>Search Student's Information</h2><br><br>
                            <form action="Searchstudents.php" method="post">
                <input type="text" name="rollno" placeholder="Enter Roll Number here" style="width: 240px;height: 35px;"><span>OR/AND<span>
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
            </div>

<table class="table table-striped table-bordered table-responsive center">
    <tr >
        <th class="text-center">Roll No.</th>
    <th class="text-center">Full Name</th>
    <th class="text-center">City</th>
    <th class="text-center">Email</th>
    <th class="text-center">Semester</th>
    <th class="text-center">Father Name</th>
    <th class="text-center">Phone</th>
    <th class="text-center">CNIC</th>
    <th class="text-center">Address</th>
    <th class="text-center">Section</th>
    <th class="text-center">Session</th>
    <th class="text-center">Gender</th>
    <th class="text-center">Password</th>
        
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $semester = $_POST['semester'];
        $rollno = $_POST['rollno'];

        $sql = "SELECT * FROM `student` WHERE `semester` = '$semester' OR `rollno`='$rollno'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
      $rollno=$DataRows['rollno'];
      $name=$DataRows['name'];
      $city=$DataRows['city'];
      $email=$DataRows['email'];
      $semester=$DataRows['semester'];
      $Father_name=$DataRows['father_name'];
      $phone=$DataRows['phone'];
      $cnic=$DataRows['cnic'];
      $address=$DataRows['address'];
      $section=$DataRows['section'];
      $session=$DataRows['session'];
      $gender=$DataRows['gender'];
      $password=$DataRows['password'];
                
                ?>
                <tr>
                    <td><?php echo $rollno;?></td>
          <td><?php echo $name; ?></td>
          <td><?php echo $city; ?></td>
          <td><?php echo $email; ?></td>
          <td><?php echo $semester; ?></td>
          <td><?php echo $Father_name; ?></td>
          <td><?php echo $phone; ?></td>
          <td><?php echo $cnic; ?></td>
          <td><?php echo $address; ?></td>
          <td><?php echo $section; ?></td>
          <td><?php echo $session; ?></td>
          <td><?php echo $gender; ?></td>
          <td><?php echo $password; ?></td>
                    
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

