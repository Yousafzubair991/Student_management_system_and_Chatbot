
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
<a href="admindash.php" class="active"><i class="fa fa-fw fa-home"></i>DASHBOARD</a>
<a href="addstudent.php"><i class="fa fa-plus-square"></i>INSERT STUDENT DETAIL</a>
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
 <br><br>
 <a href="deletestudent.php" ><i class="fa fa-minus-square"></i>DELETE STUDENT DETAIL</a>
<a href="Searchstudents.php"><i class="fa fa-search"></i>SEARCH STUDENT</a>
<a href="updatepwd.php" ><i class="fa fa-edit"></i></i>CHANGE PASSWORD</a>
 <br><br><br><br><br><br><br><br><br><br><br><br><br>
             </div>
          </div>
        </div>
      </section>




			<?php error_reporting(0);
	session_start();
	echo '<br><br><h3 class="text-center zoom"> Welcome Back! '  . $_SESSION['user']; '</h3><br><br>'  ?>
	
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


$sql = "SELECT* FROM admin WHERE username = '" . $_SESSION['user'] . "'";



if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
          
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<tr><td><b>Username:   </b>" . $row['username'] . "</td> <td><b>Employee #:   </b>" . $row['employee_no'] . "</td></tr>";
               
                echo "<tr><td><b>Name:  </b>" . $row['name'] . "</td> <td><b>Father Name:   </b>" . $row['father_name'] . "</td></tr>";
               
                echo "<tr><td><b>CNIC:   </b>" . $row['cnic'] . "</td> <td><b>Email:   </b>" . $row['email'] . "</td></tr>";
               
                echo "<tr><td><b>Phone:   </b>" . $row['phone'] . "</td> <td><b>Age:   </b>" . $row['age'] . "</td></tr>";
            
                echo "<tr><td><b>Qualification:   </b>" . $row['qualification'] . "</td> <td><b>Designation:   </b>" . $row['designation'] . "</td></tr>";
            
               
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
