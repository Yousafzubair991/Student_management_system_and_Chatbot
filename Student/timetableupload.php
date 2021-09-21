<?php
  $conn=new PDO('mysql:host=localhost; dbname=sms', 'root', '') or die(mysql_error());
  if(isset($_POST['submit'])!=""){
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $temp=$_FILES['file']['tmp_name'];
    $fname = date("YmdHis").'_'.$name;
    $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
    if($chk){
      $i = 1;
      $c = 0;
    while($c == 0){
        $i++;
        $reversedParts = explode('.', strrev($name), 2);
        $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
        $chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
        if($chk2 == 0){
          $c = 1;
          $name = $tname;
        }
      }
  }
   $move =  move_uploaded_file($temp,"../coordinator/upload/".$fname);
   if($move){
    $query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
    if($query){
    header("location:timetableupload.php");
    }
    else{
    die(mysql_error());
    }
   }
  }
  ?>
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
<a href="dropcourse.php" ><i class="fa fa-minus-square"></i> VIEW/DROP COURSE</a>
<a href="addfee.php" ><i class="fa fa-plus-square"></i> ADD FEE</a>
<br><br><br>
<a href="updatestudent.php" ><i class="fa fa-plus-square"></i>  UPDATE PROFILE</a>
<a href="Searchfee.php" ><i class="fas fa-eye"></i> VIEW FEE STATUS</a>
<a href="timetableupload.php"  class="active"><i class="fas fa-eye"></i> VIEW TIME TABLE</a>
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
      <h2>Download the Uploaded Time Table</h2>

     <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
      <thead>
        <tr>
          <th width="90%" align="center">Files</th>
          <th align="center">Action</th>  
        </tr>
      </thead>
      <?php
      $query=$conn->query("select * from upload order by id desc");
      while($row=$query->fetch()){
        $name=$row['name'];
      ?>
      <tr>
        <td>
          &nbsp;<?php echo $name ;?>
        </td>
        <td>
          <button class="button"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>
        </td>
      </tr>
      <?php }?>
    </table>
      </div>
    </div>
  </div>
