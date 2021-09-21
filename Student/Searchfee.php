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
<a href="enrollcourse.php" ><i class="fa fa-plus-square"></i> ADD COURSE</a>
<a href="dropcourse.php" ><i class="fa fa-minus-square"></i> VIEW/DROP COURSE</a>
<a href="addfee.php" ><i class="fa fa-plus-square"></i> ADD FEE</a>
<br><br><br>
<a href="updatestudent.php" ><i class="fa fa-plus-square"></i>  UPDATE PROFILE</a>
<a href="Searchfee.php"  class="active"><i class="fas fa-eye"></i> VIEW FEE STATUS</a>
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
                            <br><br><h2>View Fee DETAILS</h2><br><br>
                            <form action="Searchfee.php" method="post">
              <center> <input type="text" name="challan_no" placeholder="Enter Challan No. " style="width: 240px;height: 35px;">
                                   
                  <input type="submit" name="show" value="SHOW INFO" class="button" >  
                            </form>
                        </div>
                    </div>
                </div>
            

<table class="table table-striped table-bordered table-responsive center">
    <tr >
    <th class="text-center">Challan_No</th>
    <th class="text-center">Fee_Amount</th>
    <th class="text-center">Status</th>


        
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {

        $challan_no = $_POST['challan_no'];

        $sql = "SELECT * FROM `fee` WHERE  `challan_no`='$challan_no'";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
      $Id = $DataRows['id'];
        
        $Challan_No = $DataRows['challan_no'];
        $Fee_Amount = $DataRows['fee_amount'];
        $Status = $DataRows['status'];
    
        ?>
        <tr>
          
          <td><?php echo $Challan_No; ?></td>
          <td><?php echo $Fee_Amount; ?></td>
          <td><?php echo $Status; ?></td>
          

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