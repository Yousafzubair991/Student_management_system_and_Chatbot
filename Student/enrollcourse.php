<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
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
<a href="studentdash.php"  ><i class="fa fa-fw fa-home"></i> DASHBOARD</a>
<a href="enrollcourse.php"  class="active"><i class="fa fa-plus-square"></i> ADD COURSE</a>
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
                            <br><br><h2 class="text-center">Select Semester</h2><br><br>
                            <form action="enrollcourse.php" method="post">
                
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
       <th class="text-center">Course Code</th>
    <th class="text-center">Course Name</th>
    <th class="text-center">Credit Hours</th>
    <th class="text-center">Semester</th>
        
    </tr>
    <div>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $semester = $_POST['semester'];
        

        $sql = "SELECT * FROM `course` WHERE `semester` = '$semester' ";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
      
      $courseCode=$DataRows['courseCode'];
      $courseName=$DataRows['courseName'];
      $courseCredit=$DataRows['courseCredit'];
      $semester=$DataRows['semester'];
                ?>
               

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
                <tr>
          
          <td><?php echo $courseCode; ?></td>
          <td><?php echo $courseName; ?></td>
          <td><?php echo $courseCredit; ?></td>
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




<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>
<?php echo AdminAreaAccess(); ?>


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

<div class="container">

      <h2 class="text-center">ADD COURSE</h2>
  <p style="color: red">*Please enter data in every field to Add Student to the system.</p><br><br>

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
              Roll No:<input type="text" class="form-control" name="rollno" placeholder="Enter Roll No" >
          </div>
          <div class="form-group">
            
            Course Credit<input type="text" class="form-control" name="courseCredit" placeholder="Enter CourseCredit" required>
          </div>
          <div class="form-group">
              Course Code <input type="text" class="form-control" name="courseCode" placeholder="Enter CourseCode">
          </div>
          <div class="form-group">
              Course Name <input type="text" class="form-control" name="courseName" placeholder="Enter CourseName">
          </div>

           <div class="form-group">
            Semester:<input type="text" class="form-control" name="semester" placeholder="Enter Semester" >
          </div>
           <div class="form-group">
            Pin Code:<input type="text" class="form-control" name="password" placeholder="Enter Pin Code (Keep the pincode same for every subject)" >
          </div>

          
          <button type="submit" name="submit" class="button">Insert</button>
      </form>
    </div>
  

<?php include('footer.php') ?>

<?php 

  if (isset($_POST['submit'])) {
    if (!empty($_POST['rollno']) && !empty($_POST['password'])) {
    
      include ('dbcon.php');
      

      $rollno=$_POST['rollno'];
      $courseCredit=$_POST['courseCredit'];
      $courseCode=$_POST['courseCode'];
      $courseName=$_POST['courseName'];
      $semester=$_POST['semester'];
       $password=$_POST['password'];


     
    
      $sql = "INSERT INTO `addcourse`( `rollno`, `courseCredit`, `courseCode`, `courseName`,`semester`,`password`) VALUES ('$rollno','$courseCredit','$courseCode','$courseName','$semester','$password')";


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
          alert("Please insert atleast roll no. and courseName");
        </script>
        <?php
    }


  }

 ?>








