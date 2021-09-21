<?php
  $conn=new PDO('mysql:host=localhost; dbname=sms', 'root', '') or die(mysql_error());
  if(isset($_POST['submit'])!=""){
    $name=$_FILES['file']['name'];
    $size=$_FILES['file']['size'];
    $type=$_FILES['file']['type'];
    $temp=$_FILES['file']['tmp_name'];
    $fname = date("YmdHis").'_'.$name;
    $chk = $conn->query("SELECT * FROM  result where name = '$name' ")->rowCount();
    if($chk){
      $i = 1;
      $c = 0;
    while($c == 0){
        $i++;
        $reversedParts = explode('.', strrev($name), 2);
        $tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
        $chk2 = $conn->query("SELECT * FROM  result where name = '$tname' ")->rowCount();
        if($chk2 == 0){
          $c = 1;
          $name = $tname;
        }
      }
  }
   $move =  move_uploaded_file($temp,"result/".$fname);
   if($move){
    $query=$conn->query("insert into result(name,fname)values('$name','$fname')");
    if($query){
    header("location:uploadresult.php");
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
<a href="Searchstudents.php" ><i class="fa fa-search"></i>SEARCH STUDENT</a>
<a href="addadmin.php" ><i class="fa fa-plus-square"></i>ADD ADMIN</a>
<a href="timetableupload.php" ><i class="fa fa-plus-square"></i>UPLOAD FILES</a>
<a href="uploadresult.php" class="active"><i class="fa fa-plus-square"></i>UPLOAD RESULT</a>
<a href="updatepwd.php" ><i class="fa fa-edit"></i></i>CHANGE PASSWORD</a>
<br><br><br><br><br><br><br><br><br><br><br><br>
             </div>
          </div>
        </div>
      </section>
       

<div class="container99">
    <div class="center">
    <div class="col-md-6 col-md-offset-3  jumbotron ">
      <h2>Upload Result </h2>
      <p style="color: red">Acceptable File Format extensions pdf,  txt,  html,  htm,  exe,  zip,  doc,  xls,  ppt,  gif,  png,   jpeg,  jpg,  php.
</p>
      <form enctype="multipart/form-data" action="" name="form" method="post">
    Select File
      <input type="file" name="file" id="file" /></td>
      <input type="submit" name="submit" class="button" id="submit" value="Submit" />
  </form>
  <br>
    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
      <thead>
        <tr style="color: black">
          <th width="90%" align="center">Uploaded Files</th>
           
        </tr>
      </thead>
      <?php
      $query=$conn->query("select * from result order by id desc");
      while($row=$query->fetch()){
        $name=$row['name'];
      ?>
      <tr style="color: black">
        <td>
          &nbsp;<?php echo $name ;?>
        </td>
       
      </tr>
      <?php }?>
    </table>
      </div>
    </div>
  </div>
