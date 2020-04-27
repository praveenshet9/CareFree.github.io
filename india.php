<!DOCTYPE html>
<html>
  <head>
    <title>Live Updates</title>
    <?php include 'link/links.php'?>
    <?php include 'css/style.php'?>
    <?php include 'scroll/scrolltop.php'?>
    
  </head>
  <body onload="fetch()">
   <nav class="navbar navbar-expand-md navbar-dark  nav_style p-3">
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
        <h1 class="update1_header text-center text-uppercase">COVID-19 Statewise Updates Of INDIA<br>(Live)</h1>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered table-striped text-center" id="tbval">
          <tr>
            <th class="text-capitalize">lastupdatedtime</th>
            <th class="text-capitalize">state</th>
            <th class="text-capitalize">confirmed</th>
            <th class="text-capitalize">active</th>
            <th class="text-capitalize">recovered</th>
            <th class="text-capitalize">deaths</th>
          </tr>
          
          <?php
          $data=file_get_contents('https://api.covid19india.org/data.json');
          $coronadata=json_decode($data,true);
          
          $statescount = count($coronadata['statewise']);
          $i=1;
          while($i<$statescount){
          ?>
          <tr>
            <td bgcolor="#eb9605" class="text-white"><?php echo  $coronadata['statewise'][$i]['lastupdatedtime'] ?></td>
            <td bgcolor="#0c71e0"><?php echo  $coronadata['statewise'][$i]['state'] ?></td>
            <td bgcolor="#228b22"><?php echo  $coronadata['statewise'][$i]['confirmed'] ?></td>
            <td bgcolor="#ffff00"><?php echo  $coronadata['statewise'][$i]['active'] ?></td>
            <td bgcolor="#eb9605"><?php echo  $coronadata['statewise'][$i]['recovered'] ?></td>
            <td bgcolor="#ff0000"><?php echo  $coronadata['statewise'][$i]['deaths'] ?></td>
          </tr>
          
          <!-- echo  $coronadata['statewise'][$i]['lastupdatedtime']."<br>";
          echo  $coronadata['statewise'][$i]['state']."<br>";
          echo  $coronadata['statewise'][$i]['confirmed']."<br>";
          echo  $coronadata['statewise'][$i]['active']."<br>";
          echo  $coronadata['statewise'][$i]['recovered']."<br>";
          echo  $coronadata['statewise'][$i]['deaths']."<br>"; -->
          <?php
          $i++;
          }
          
          
          ?>
        </table>
        
      </div>
    </section>
    
    
    
    
    
    
    
    
    <footer class="mt-5">
      <div class="footer_s text-white text-center container-fluid">
        <p>Copyright © 2020 Praveenshet9</p>
        
      </div>
      
    </footer>
  </body>
</html>