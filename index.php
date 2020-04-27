<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
    <?php include 'scroll/scrolltop.php'?>
    
  </head>
  <body>


    </head>
<body>

  
    <!-- ********************* nav bar****************-->

  <nav class="navbar navbar-expand-md navbar-dark nav_style p-3">
   <a class="navbar-brand pl-5" href="#">Care<span><img src="images/logo.png" height="40" width="40"></span>Free</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="fa fa-fw fa-home"></i> home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#dropdownlinks" id="navbardrop" data-toggle="dropdown">
              Live Updates
            </a>
            <div class="dropdown-menu bg-light" id="dropdownlinks">
              <a class="dropdown-item" href="world.php">Worlwide update</a>
              <a class="dropdown-item" href="india.php">India</a>
              <a class="dropdown-item" href="#">Close</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#aboutid">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#symptid">symptoms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#preventid">prevention</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contactid">contact</a>
          </li>
        </ul>
  </div>  
</nav>
<br>


  
    <!-- *******************main header****************-->


      
    
    <div class="main_header" id="indexid">
      <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="images/togeather.png" width="300" height="300" >
            
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="rightside  w-100 h-50 mt-4 d-flex justify-content-center align-items-center">
            <h1>Stay <span><img src="images/stayhome.png" height="75" width="75"></span>ome-Stay Saf<span><img src="images/heart.png" height="75" width="75"></span>.<br></h1>
          </div>


          
            


          <div class="rightside1   d-flex justify-content-center align-items-center">
            <h2>Lets Fight Together Against Corona Virus.</h2>
          </div>
        </div>
        
        
      </div>
      
    </div>
    
    <!-- *******************corona updates worlwide****************-->
    <section class="corona_update">
      <div class="container-fluid text-center mt-5 mb-5">
        <h1 class="update_header">W<span class="corona_rot"><img src="images/earth.gif" height="40" width="40"></span>rldwide COVID-19 Updates<br> (Live)</h1>
        
        <div class="mapimage mt-5">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="images/map.png" class="img-fluid" width="75%" >
            </div>
          </div>
        </div>
        <a href="world.php" class="btn btn-success mt-3" role="button">Click here</a>
      </div>
    </section>
    <!-- *******************corona updates india****************-->
    <section class="corona_update">
      <div class="container text-center mt-5 mb-5">
        <h1 class="update_header">COVID-19 Statewise Updates Of INDIA<br> (Live)</h1>
        <div class="mapimage mt-5">
          <div class="col-lg-12 col-md-12 col-12">
            <div class="w-100 h-100 d-flex justify-content-center align-items-center">
              <img src="images/india.jpg" class="img-fluid" width="80%" height="25%" >
            </div>
          </div>
        </div>
        <a href="india.php" class="btn btn-success mt-3" role="button">Click here</a>
      </div>
      
    </section>
    -<!-- *************************************** about section***************************-->
    <div class="container-fluid sub_section pt-3 pb-5" id="aboutid">
      <div class="section_header text-center mb-5 mt-5">
        <h1>About COVID-19</h1>
      </div>
      <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-5 mb about_res">
          <img src="images/covid.jpg" class="img-fluid">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <div class="question">
            <h1>Whta is COVID-19 (Corona-Virus)</h1>
            <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.</p>
            <p>Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
            <p>The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
            <p>At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
          </div>
        </div>
        
      </div>
      <!-- ******************************* corona symptoms *************************************** -->
      <div class="container-fluid sub_section pt-5 pb-5" id="symptid">
        <div class="section_header text-center mb-5 mt-5">
          <h1>Corona Symptoms</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/cough.png" class="img-fluid" width="250" height="250">
                <figcaption >Cough</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/runnynose.png" class="img-fluid" width="250" height="250">
                <figcaption >Runny Nose</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/fever.png" class="img-fluid" width="250" height="250">
                <figcaption >Fever</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/cold.png" class="img-fluid" width="250" height="250">
                <figcaption >Cold</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/tired.png" class="img-fluid" width="250" height="250">
                <figcaption >Tiredness</figcaption>
              </figure>
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <figure class="text-center">
                <img src="images/breath.png" class="img-fluid" width="250" height="250">
                <figcaption>Breathing problem</figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <!-- ******************************* corona preventions *************************************** -->
      <div class="container-fluid sub_section pt-5 pb-5" id="preventid">
        <div class="section_header text-center mb-5 mt-5">
          <h1>6 Ways to Protect Against the Corona-Virus</h1>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/handwash.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub.</p>
                </div>
                
              </div>
              
              
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/mask.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Wearing a mask can stop you from the symptoms of respiratory illness caused by inhalation of hazardous substance at work.</p>
                </div>
                
              </div>
              
              
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/distance.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Avoid coming in contact with individuals displaying symptoms of illness ( keep distance of 1 meter or 3 feet).</p>
                </div>
                
              </div>
              
              
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5 ">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/stayhome.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>This is the best chance to serve your country by staying at home. So stay safe at home and keep yourself and your family safe.</p>
                </div>
                
              </div>
              
              
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/news.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>Stay informed by watching the news & follow the recommended practices.</p>
                </div>
                
              </div>
              
              
            </div>
            <div class="col-lg-4 col-md-4 col-12 mt-5">
              <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                  <figure>
                    <img src="images/doctor.png" class="img-fluid" width="100" height="100">
                  </figure>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                  <p>If you have cold, cough, fever and difficulty in breathing, seek medical care immediately..</p>
                </div>
                
              </div>
              
              
            </div>
            
          </div>
        </div>
      </div>
      <!-- ******************************* contact form *************************************** -->
      <div class="container-fluid pt-5 pb-5" id="contactid">
        <div class="section_header text-center mb-5 mt-5">
          <h1>Contact Us ASAP</h1>
        </div>
        <div class="container">
          <div class="col-lg-8 offset-lg-2 col-12">
            <form action="" method="POST">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
              </div>
              <div class="form-group">
                <label>Mobile</label>
                <input type="tel" class="form-control" name="mobile" placeholder="mobile number" autocomplete="off" required>
              </div>
              
              <div class="form-group">
                <label>Select Symptoms</label> <br>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox"  class="custom-control-input" id="customcheckbox1"   name="coronasym[]" value="cold">
                  <label class="custom-control-label" for="customcheckbox1">Cold</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox"  class="custom-control-input" id="customcheckbox2"   name="coronasym[]" value="fever">
                  <label class="custom-control-label" for="customcheckbox2">Fever</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox"  class="custom-control-input" id="customcheckbox3"   name="coronasym[]" value="breath">
                  <label class="custom-control-label" for="customcheckbox3">Difficulty in breathing</label>
                </div>
                <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
                  <input type="checkbox"  class="custom-control-input" id="customcheckbox4"   name="coronasym[]" value="tired">
                  <label class="custom-control-label" for="customcheckbox4">Feeling weak</label>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Example Textarea</label>
                <textarea  name="msg" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            
          </div>
          
        </div>
      </div>
      <!-- ******************************* footer *************************************** -->
      <footer class="mt-5">
        <div class="footer_s text-white text-center container-fluid">
          <p>Copyright © 2020 Praveenshet9</p>
          
        </div>
        
      </footer>







      
    </body>
  </html>
  <?php
  include 'dbcon.php';
  if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $msg = $_POST['msg'];
  $chk = "";
  foreach($symp as $chk1){
  $chk .=$chk1.",";
  }
  $insertquery = "insert into coronacase( username, email, mobile, sympt, message) values ('$username', '$email','$mobile', '$chk','$msg')";
  $query= mysqli_query($con,$insertquery);
  if($con){
  ?>
  <script>
  alert("Thank you!\n Message has been successfully sent. We will contact you very soon!");
  </script>
  <?php
  }else{
  ?>
  <script>
  alert(" Not inserted");
  </script>
  <?php
  }
  }
  ?>