<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
    <title>Courses</title>
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
   <style>
* {
  box-sizing: border-box;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

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
.center {
  text-align: center;

}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

nav2 {
  float: left;
  width: 30%;
  background: #ccc;
  padding: 20px;
  height: 100%;
}

/* Style the list inside the menu */
nav2 ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  
}

section::after {
  content: "";
  display: table;
  clear: both;
}


@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
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
               <h3>BACHELORS IN SOFTWARE ENGINEERING</h3>    
             </div>
          </div>
        </div>
      </section>
      <!-- end section -->

<section>
  <nav2>
<h3> Program Information </h3>
<p><b> Duration:</b>  4 Years </p> 
<p><b>Level:</b>  BS</p>
<p><b>Shift: </b> Morning Evening</p>
<p><b>Credit Hrs:</b>  138</p>
<p><b>Semesters:</b>  8</p>
</p>
  </div>
    </div>
      </div>
  </nav2>
  
  <article style="height: 100%">
<h3>DESCRIPTION</h3>
<p>Bachelors of Software Engineering - BS(SE) is a 4-year program, that lays a strong foundation of the students in the feild of software designing and development.</p>

<h3>ELIGIBILITY</h3>
<p>Intermediate with any of the following combinations with 50% marks: Maths, Physics, Chemistry or Maths, Physics, Computers.</p>
<h3>Courses of Software Engineering</h3>
                            <form action="courses.php" method="post">
                            	<table class="table table-striped table-bordered table-responsive center">
                            		<center>
                 <input type="submit" name="show" value="Please click here to view courses" class="button" > 
                 </center>
                            </form>
                        </div>
                    </div>
                </div>
            

<table class="table table-striped table-bordered table-responsive center">
    <tr style="color: black">
    
    <th class="text-center">Course Code</th>
    <th class="text-center">Course Name</th>
    <th class="text-center">Course Credit Hours</th>
    </tr>
<?php 
    include('dbcon.php');
    if (isset($_POST['show'])) {
        $sql = "SELECT * FROM `course`";

        $result = mysqli_query($conn,$sql);
        if (mysqli_num_rows($result)>0) {
            while ($DataRows = mysqli_fetch_assoc($result)) {
   
      $courseCode=$DataRows['courseCode'];
      $courseName=$DataRows['courseName'];
      $courseCredit=$DataRows['courseCredit'];
                
                ?>

                <tr style="color: black">
          <td><?php echo $courseCode; ?></td>
          <td><?php echo $courseName; ?></td>
          <td><?php echo $courseCredit; ?></td>
                    
                </tr>
                <?php
                
            }
            
        } else {
            echo "<tr><td colspan ='3' class='text-center'>No Record Found</td></tr>";
        }
    }

 ?>
  </article>
</section>



     

           
    


