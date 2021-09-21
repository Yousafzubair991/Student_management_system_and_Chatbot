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
<a href="enrolllist.php" class="active"><i class="fa fa-search"></i>ENROLLED STUDENTS</a>
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
                            <br><br><h2> Search Enroll Courses</h2><br><br>
                            <form action="enrolllist.php" method="post">
                
               <input type="text" name="rollno" placeholder="Enter Roll Number here" style="width: 240px;height: 35px;"><span>
               
                  <input type="submit" name="show" value="SHOW INFO" class="button" >  
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<table class="table table-striped table-bordered table-responsive center">
    <tr >
      <th class="text-center">Roll No</th>
      <th class="text-center">Course Credit</th>
       <th class="text-center">Course Code</th>
    <th class="text-center">Course Name</th>
    <th class="text-center">Semester</th>
        
    </tr>
    <div>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $rollno = $_POST['rollno'];
        

        $sql = "SELECT * FROM `addcourse` WHERE `rollno` = '$rollno' ";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
      
      $rollno=$DataRows['rollno'];
       $courseCredit=$DataRows['courseCredit'];
         $courseCode=$DataRows['courseCode'];
      $courseName=$DataRows['courseName'];
      $semester=$DataRows['semester'];
                ?>
               

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <tr>
          <td><?php echo $rollno; ?></td>
          <td><?php echo $courseCredit; ?></td>
          <td><?php echo $courseCode; ?></td>
          <td><?php echo $courseName; ?></td>
          <td><?php echo $semester; ?></td>
                </tr>
      </form>

                <?php
               } 
            }
            
        } else {
            echo "<tr><td colspan ='4' class='text-center'>No Record Found</td></tr>";
        }



 ?>