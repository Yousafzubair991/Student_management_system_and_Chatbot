
<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>NUML_SFS</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

  <style>
.button {
  background-color: #80909c;
  border: none;
  color: white;
  padding: 14px 40px;
  border-radius: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button:hover {
  color: black;
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
}


</style>
   </head>
   <body id="inner_page">
    <?php
   echo "";
   ?>
      <!-- header -->
      <header class="header">

        <div class="header_top_section">
           <div class="container">
              <div class="row">
               <div class="col-lg-3">
                  <div class="full">
                     <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="#" /></a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9 site_information">
                  <div class="full">
                     <div class="main_menu">
                        <nav class="navbar navbar-inverse navbar-toggleable-md">
                           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="float-left">Menu</span>
                           <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                           </button>
                           <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                              <ul class="navbar-nav">
                                 <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="about.php">About</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-aqua-hover" href="News.php">News</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="events.php">Events</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="contact.php">Contact Us</a>
                                 </li>
                                 <li class="nav-item">
                                    <a class="nav-link color-grey-hover" href="Loginportal.php">Login</a>
                                 </li>
                              </ul>
                              <ul class="navbar-nav">
                                 <li class="nav-item">
                                    <a class="nav-link" href="#"><img src="images/search_icon.png" alt="#" /></a>
                                 </li>
                              </ul>
                           </div>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
           </div>
        </div>

      </header>
      <!-- end header -->
      
      <!-- section -->
      <section class="main_full inner_page">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
               <h3>LOGIN</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->

      
<div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                  <p style="color: red;">*This portal is only for Department of Software Engineering</p>
                  </div>
               </div>
            </div>
     <!-- section -->
      <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                  <p>Please select to Login as</p>
                  </div>
               </div>
            </div>
      <!-- end section -->
      <center>

      <a class="button" href="Coordinator/login.php">Login as Coordinator</a>
       <a class="button" href="Admin/login.php">Login as Administrator</a>
        <a class="button" href="Student/login.php">Login as Student</a>

        </center>

        <br><br><br><br>
<?php include('foot.php') ?>
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
