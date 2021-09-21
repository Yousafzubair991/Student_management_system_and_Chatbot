
<?php require_once('include/Session.php');?>
<?php require_once('include/Functions.php');?>

<?php echo AdminAreaAccess(); ?>

<?php include('head.php') ?>
<!-- Load an icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>


.zoom {
  padding: 10px;
 
  transition: transform .2s;
  
  margin: 0 auto;
}

.zoom:hover {
  -ms-transform: scale(1.2); 
  -webkit-transform: scale(1.2); 
  transform: scale(1.2); 
}

table{
	
	font-family: 'Poppins', sans-serif;
  color: black;
  border-radius: 5px;
  text-align: left;
  text-decoration: none;
  font-size: 20px;
  width: 50%;
}
td{
border: 2px solid #ddd;
  padding: 18px 18px;
  color: black;
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

<?php error_reporting(0);
  session_start();
  echo '<br><br><h2 class="text-center zoom"> Welcome Back! '  . $_SESSION['email']; '</h2>'  ?>
<br>
 <h3 class="text-center zoom">User Profile</h3>
<div class="center">

			<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "sms");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Attempt select query execution


$sql = "SELECT* FROM student WHERE email = '" . $_SESSION['email'] . "'";



if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
          
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<tr><td><b>Roll #:   </b>" . $row['rollno'] . "</td> <td><b>Name:   </b>" . $row['name'] . "</td></tr>";
               
                echo "<tr><td><b>Father Name:  </b>" . $row['father_name'] . "</td> <td><b>Phone:   </b>" . $row['phone'] . "</td></tr>";
               
                echo "<tr><td><b>City:   </b>" . $row['city'] . "</td> <td><b>Email:   </b>" . $row['email'] . "</td></tr>";
               
                echo "<tr><td><b>Semester:   </b>" . $row['semester'] . "</td> <td><b>CNIC:   </b>" . $row['cnic'] . "</td></tr>";
            
                echo "<tr><td><b>Session:   </b>" . $row['session'] . "</td> <td><b>Gender:   </b>" . $row['gender'] . "</td></tr>";
            
                echo "<tr><td><b>Section:   </b>" . $row['address'] . "</td> <td><b>Section:   </b>" . $row['section'] . "</td></tr>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
			</div>
		</div>
	</div>
</div>
<br>
<?php include('foot.php') ?>
