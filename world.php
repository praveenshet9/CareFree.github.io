<!DOCTYPE html>
<html>
  <head>
    <title>Live Updates</title>
    <?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
    <?php include 'scroll/scrolltop.php'?>
    
  </head>
  <body onload="fetch()">
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
        </ul>
  </div>  
</nav>
<br>
   
    <section class="corona1_update container-fluid">
      <div class="container-fluid text-center mt-5 mb-5">
        <h1 class="update1_header text-center text-uppercase">W<span class="corona_rot"><img src="images/earth.gif" height="50" width="50"></span>rldwide COVID-19 Updates<br> (Live)</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th>Country</th>
            <th>TotalConfirmed</th>
            <th>TotalRecovered</th>
            <th>TotalDeaths</th>
            <th>NewConfirmed</th>
            <th>NewRecovered</th>
            <th>NewDeaths</th>
          </tr>
        </table>
        
      </div>
    </section>
    <script type="text/javascript">
      function fetch(){
        $.get("https://api.covid19api.com/summary",
          function(data){
            //console.log(data['Countries'].length);
            var tbval= document.getElementById('tbval');
            for( var i=1; i<(data['Countries'].length); i++){
              var x = tbval.insertRow();
              
              x.insertCell(0);
              tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
              tbval.rows[i].cells[0].style.background='#0c71e0';
              tbval.rows[i].cells[0].style.color='#fff';
              x.insertCell(1);
              tbval.rows[i].cells[1].innerHTML= data['Countries'][i-1]['TotalConfirmed'];
              tbval.rows[i].cells[1].style.background='#228b22';
              x.insertCell(2);
              tbval.rows[i].cells[2].innerHTML= data['Countries'][i-1]['TotalRecovered'];
              tbval.rows[i].cells[2].style.background='#eb9605';
              x.insertCell(3);
              tbval.rows[i].cells[3].innerHTML= data['Countries'][i-1]['TotalDeaths'];
              tbval.rows[i].cells[3].style.background='#ff0000';
              x.insertCell(4);
              tbval.rows[i].cells[4].innerHTML= data['Countries'][i-1]['NewConfirmed'];
              tbval.rows[i].cells[4].style.background='#228b22';
              x.insertCell(5);
              tbval.rows[i].cells[5].innerHTML= data['Countries'][i-1]['NewRecovered'];
              tbval.rows[i].cells[5].style.background='#eb9605';
            x.insertCell(6);
              tbval.rows[i].cells[6].innerHTML= data['Countries'][i-1]['NewDeaths'];
              tbval.rows[i].cells[6].style.background='#ff0000';
                  
              
            }
          }
          );
      }
      
    </script>
    <footer class="mt-5">
      <div class="footer_s text-white text-center container-fluid">
        <p>Copyright © 2020 Praveenshet9</p>
        
      </div>
      
    </footer>
  </body>
</html>