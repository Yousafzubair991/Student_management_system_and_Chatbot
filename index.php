<?php include('head.php') ?>
      
      <!-- section -->
      <section class="main_full banner_section_top">
        <div class="container-fluid">
          <div class="row">
             <div class="full">
                  <div class="slider_banner">
                    <img class="img-responsive" src="images/slider_img.png" alt="#" />
                      <div class="slide_cont">
                        <div class="slider_cont_inner">
                          <p class="zoom" style="color:white ;text-align:center;font-size: 65px;">NUML  Student  Facilitation  System</p>
                        <p>The mission of the National University of Modern Languages is to establish, sustain and enhance itself as a quality-centric higher education institution that provides excellent academic environment and opportunities.</p>
                       
                        </div>
                      </div>
                  </div>
                </div>
          </div>
        </div>
      </section>
      <!-- end section -->
      <html>
    <style>
        
        .rw-conversation-container .rw-messages-container .rw-message .rw-response{background-color: #339BFF;}
    </style>
    <body>
        <script>!(function () {
            let e = document.createElement("script"),
              t = document.head || document.getElementsByTagName("head")[0];
            (e.src =
              "https://cdn.jsdelivr.net/npm/rasa-webchat/lib/index.js"),
              (e.async = !0),
              (e.onload = () => {
                window.WebChat.default(
                  {  
                    initPayload:'/greet',
                    customData: { language: "en" },
                    socketUrl: "http://localhost:5005",
                    title:'NUML SFS',
                    subtitle: 'Say hi and get started',
                    // add other props here
                  },
                  null
                );
              }),
              t.insertBefore(e, t.firstChild);
          })();
          </script>
    </body>
</html>
    
     <!-- about section -->
      <section class="layout_padding section about_dottat">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2 class="zoom">Our Vision</h2>
                  </div>
                  <div class="full">
                     <p class="large">To impart state of the art software engineering education meeting national and international standards and enable the graduates to work independently displaying good ethical and moral values.</p>
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="about_img margin_top_30  text_align_center">
                     <img src="images/ab_img.png" width=100% height=100% style="vertical-align:top" alt="#" />
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end about section -->

      <!-- section -->
      <section class="layout_padding section">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2 class="zoom">Software Engineering Department</h2>
                  </div>
                  <div class="full">
                     <p class="large">The department of software engineering aims to graduate students with innovative research skills that enable them to effectively participate in industrial and societal development. It aspires to motivate young software engineers to grow as highly skilled professionals with inspiring knowledge of current trends of software engineering. The department attempts to inculcate high ethical values in students so that they can compete in all kinds of healthy academic, social and industrial environments.</p>
                  </div>
               </div>
            </div>
            <br><br><br><br><br><br>
            <div class="row">

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                   <a href="Faculty.php">
                   <img class="img-responsive zoom" src="images/cour1.png" alt="#" style="width:200px;height: 200px" />
                 </div>
                 <h3 class="zoom">Our Faculty</h3>
                 </a>
              </div>  

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                  <a href="Block.php">
                   <img class="img-responsive zoom" src="images/cour2.png" alt="#" style="width:200px;height: 200px" />
                 </div>
                 <h3 class="zoom">Our Block</h3>
                </a>
              </div> 

              <div class="col-md-4 text_align_center">
                 <div class="cours">
                  <a href="Courses.php">
                   <img class="img-responsive zoom" src="images/cour3.png" alt="#" style="width:200px;height: 200px" />
                 </div>
                 <h3 class="zoom">Our Courses</h3>
                </a>
              </div> 

            </div>
            <div class="row">
               <div class="col-md-12">
                  <div class="full center">
                      
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->

   

      <!-- section -->
      <section class="layout_padding section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text_align_center">
                  <div class="full heading_s1">
                     <h2 class="zoom">Our Head of Department</h2>
                  </div>
                  <div class="full">
                     <p class="large">  </p>
                  </div>
               </div>
               <div class="col-md-12 testimonial">
                  <div class="full text_align_center">
                     <img src="images/F2.png" class="myimg zoom" alt="#" />
                     <h3 class="zoom"><span class="theme_color_text">DR. MUZAFFAR KHAN</span><br><small>HOD</small></h3>
                  </div>
                  <div class="full margin_top_30 text_align_center">
                    <h4>  </h4>
                    <p>The Department of Software Engineering has been established to provide specialized and focused learning experience to its students.  The department offers BS, MS, and Ph.D. programs in Software Engineering. The department is equipped with the good number of required resources for the academic programs offered.</p>
                  </div>
               </div>
            </div>
        </div>
      </section>
      <!-- end section -->

    
      <!-- section -->
      <section class="section blue_pattern_bg" style="background-color: #3b3bff;">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="full">
                     <h4>Subscribe Now to Our Newsletter !</h4>
                    
                  </div>
               </div>
               <div class="col-md-6">
                 <div class="form_subribe">
                    <form>
                       <input type="email" name="email" placeholder="Enter Your Email" />
                       <button>Subscribe</button>
                    </form>
                 </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end section -->
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
      <script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>
   </body>
</html>