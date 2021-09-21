<?php include('header.php') ?>
<html>

    <head>
        <title>SFS</title>
    </head>
    <body >
    </body>
</html>
<?php session_start();?>
<div style="background-color: #80909c;">
 <a href="../loginportal.php" > < Back to Login Portal</a>
</div>
              <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>ADMIN PORTAL</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->
            <div class="" >
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-6 col-md-offset-3 jumbotron" style="background-color: #80909c;border:solid black 2px;border-radius: 10px">
                            <form action="login.php" method="post" >
                              <div class="form-group " >
                                  <b style="color:  black">Username</b><input type="text" class="form-control" name="user" placeholder=" Enter Username" style="border-radius: 10px" required>
                              </div>
                            <div class="form-group">
                                  <b style="color:  black">Password</b><input type="password" class="form-control" name="password" placeholder="Enter Passoword" style="border-radius: 10px" required>
                            </div>
                              <div class="form-group">
                                  <input type="submit" name="login" value="LOGIN" class="btn btn-success btn-block text-center" style="border-radius: 10px;border:none;background-color: black"> 
                              </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php
    include ('dbcon.php');

    if (isset($_POST['login'])) {

        $user = $_POST['user'];
        $password = $_POST['password'];
        $qry = "SELECT * FROM admin WHERE username='$user' AND password='$password'";
        
        $run  = mysqli_query($conn, $qry);

       $row = mysqli_num_rows($run);

        if($row > 0) {
         $data = mysqli_fetch_assoc($run);
                    $id= $data['id'];
                    $_SESSION['uid'] = $id;
                    $_SESSION['user']=$user;
                    header('location:admindash.php');
        } else {
      ?>             
    <script>
        alert('username or passoword invalid');
        window.open('login.php','_self');
    </script>
    <?php
                   
                }

}
?>

<?php include('footer.php') ?>

