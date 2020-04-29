<?php require_once("auth.php"); ?>
<?php
require("app/config/db.php");

try{
    $positif ="SELECT CAST(COUNT(nama) AS INT) FROM positif ";
    $result_positif=$db->prepare($positif);
    $result_positif->execute();
    $pos=$result_positif->fetch();


    $non_positif_odp ="SELECT CAST(COUNT(nama) AS INT) FROM non_positif where status='ODP' ";
    $non_odp=$db->prepare($non_positif_odp);
    $non_odp->execute();
    $odp=$non_odp->fetch();

    $non_positif_pdp ="SELECT CAST(COUNT(nama) AS INT) FROM non_positif where status='PDP' ";
    $non_pdp=$db->prepare($non_positif_pdp);
    $non_pdp->execute();
    $pdp=$non_pdp->fetch();

}

catch(Exception $e){

    echo "Error" . $e->getMessage();
    exit();
}



?>

<?php 
    $poss=($pos["CAST(COUNT(nama) AS INT)"]) ;
     $odpp=($odp["CAST(COUNT(nama) AS INT)"]);
     $pdpp=($pdp["CAST(COUNT(nama) AS INT)"]);

     $pos=intval($poss);
     $odp=intval($odpp);
     $pdp=intval($pdpp);
     $total=$pos+$odp+$pdp; 
     
      $p_positif=$pos / $total*100;
      $p_pdp=$pdp / $total*100;
      $p_odp=$odp / $total*100;
      ?>


            <!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/favicon.ico" type="image/ico" />

  <title><?php echo  $_SESSION["user"]["name"] ?> | </title>

  <!-- Bootstrap -->
  <link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="assets/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- bootstrap-progressbar -->
  <link href="assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
  <!-- JQVMap -->
  <link href="assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
  <!-- bootstrap-daterangepicker -->
  <link href="assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="assets/build/css/custom.min.css" rel="stylesheet">
  
  <link href="assets/Chart.js" rel="stylesheet">
  <style type="text/css">
            .chart {
                width: 40%;
                margin: 15px auto;
            }
    </style>
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span><?php echo  $_SESSION["user"]["name"] ?></span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            
            <div class="profile_info text-center">
              <span>Welcome,</span>
              <h2><?php echo  $_SESSION["user"]["name"] ?></h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  
                     <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="app/views/pdp/read.php">PDP</a></li>
                    <li><a href="app/views/odp/read.php">ODP</a></li>
                    <li><a href="app/views/positif/read.php">Positif</a></li>
                  </ul>
                </li>
                
              </ul>
           
              <ul class="nav side-menu">
                <li><a><i class="fa fa-check-circle-o"></i> Jumlah Terkonfirmasi <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="app/views/jumlah_odp/read.php">Jumlah ODP Riau</a></li>
                    <li><a href="app/views/jumlah_pdp/read.php">Jumlah PDP Riau</a></li>
                    <li><a href="app/views/jumlah_positif/read.php">Jumlah Positif Riau</a></li>
                  </ul>
                </li>
            
                <li><a href="logout.php"><i class="fa fa-arrow-left"></i> Logout </a></li>
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown"
                  data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt=""><?php echo  $_SESSION["user"]["name"] ?>
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  
                  <a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

              <li role="presentation" class="nav-item dropdown open">
               
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="dropdown-item">
                      <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                      <span>
                        <span>John Smith</span>
                        <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                        Film festivals used to be do-or-die moments for movie makers. They were where...
                      </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <div class="text-center">
                      <a class="dropdown-item">
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="container-fluid chart">
        <canvas id="piechart" width="100" height="100"></canvas>
        </div>
       
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          Indri - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="assets/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="assets/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="assets/vendors/nprogress/nprogress.js"></script>
  <!-- Chart.js -->
  <script src="assets/vendors/Chart.js/dist/Chart.min.js"></script>
  <!-- gauge.js -->
  <script src="assets/vendors/gauge.js/dist/gauge.min.js"></script>
  <!-- bootstrap-progressbar -->
  <script src="assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
  <!-- iCheck -->
  <script src="assets/vendors/iCheck/icheck.min.js"></script>
  <!-- Skycons -->
  <script src="assets/vendors/skycons/skycons.js"></script>
  <!-- Flot -->
  <script src="assets/vendors/Flot/jquery.flot.js"></script>
  <script src="assets/vendors/Flot/jquery.flot.pie.js"></script>
  <script src="assets/vendors/Flot/jquery.flot.time.js"></script>
  <script src="assets/vendors/Flot/jquery.flot.stack.js"></script>
  <script src="assets/vendors/Flot/jquery.flot.resize.js"></script>
  <!-- Flot plugins -->
  <script src="assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
  <script src="assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
  <script src="assets/vendors/flot.curvedlines/curvedLines.js"></script>
  <!-- DateJS -->
  <script src="assets/vendors/DateJS/build/date.js"></script>
  <!-- JQVMap -->
  <script src="assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
  <script src="assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
  <script src="assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
  <!-- bootstrap-daterangepicker -->
  <script src="assets/vendors/moment/min/moment.min.js"></script>
  <script src="assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="assets/build/js/custom.min.js"></script>

</body>

</html>
<script type="text/javascript">
        var ctx = document.getElementById("piechart").getContext("2d");
        var data = {
            labels: [ 'Positif','ODP','PDP'],
            datasets: [{
                label: "Jumlah Terkonfirmasi",
                data: [ <?php echo $p_positif ?>,<?php echo $p_odp ?>,<?php echo $p_pdp ?>
                ],
                backgroundColor: [
                    '#29B0D0',
                    '#2A516E',
                    '#F07124'
                ]
            }]
        };

        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true
            }
        });
    </script>