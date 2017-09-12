<?php
session_start();
require 'connect.php';
?>
<?php
          $val = $_SESSION['usrname'];
          $qwer = "select * from hod where username='$val'";
          $qwer_run = mysqli_query($conn,$qwer);
          if(mysqli_num_rows($qwer_run)>0)
          {
            // echo "<h2><center>Data available!</center></h2>";
            while ($row = mysqli_fetch_assoc($qwer_run)) 
            {
              $val2 = ucfirst($row["firstname"])." ".ucfirst($row["lastname"]);
             // echo "<h3>Firstname:</h3>".ucfirst($row["col1"])." ".ucfirst($row["col2"]);
              // echo "<h3 class=text-success>Fullname:$val2</h3>".$val2;
            }
          }
      ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>C.A.S.E | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/mystyle.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/bootstrap.min.js"></script>

  <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
  <!--<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg "><span class="glyphicon glyphicon-home"> </span> <b>C</b>.A.S.E</span>

    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar ">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> 
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/lol.png" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php
              echo $val2;
              ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="dist/img/lol.png" class="img-circle" alt="User Image">

                <p>
                  Welcome, 
                  <?php
                    echo $val2;
                  ?>

                  <small style="color:yellow;">HOD</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="dashboard.php" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <form action="dashboard.php" method="post">
                    <input type="submit" class="btn btn-default btn-flat" name="logout" value="Sign out">
                  </form>
                  <!-- <a href="#" class="btn btn-default btn-flat">Sign out</a> -->
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
<?php
if (isset($_POST['logout'])) {
  session_destroy();
  echo "<script type='text/javascript'>alert('You have been Logged Out !')</script>";
  echo("<script>window.location = 'login.php'</script>");
}
?>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/lol.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php
                    echo $val2;
                  ?></p>
          <center style="font-size: 12px"><a href="dashboard.php"><i class="glyphicon glyphicon-user" style="color: green"></i> <?php echo $val;?></a></center>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>HOD's Dashboard</span>
          </a>
        </li>

        <li class="treeview active">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Assign Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="dashboard_100assign.php"><i class="fa fa-circle-o"></i> 100 Level</a></li>
            <li><a href="dashboard_200assign.php"><i class="fa fa-circle-o"></i> 200 Level</a></li>
            <li><a href="dashboard_300assign.php"><i class="fa fa-circle-o"></i> 300 Level</a></li>
            <li class="active"><a href="dashboard_400assign.php"><i class="fa fa-circle-o"></i> 400 Level</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Manage Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="hod_settings.php"><i class="fa fa-circle-o"></i> Alter Details</a></li>
            <li><a href="HodchangePass.php"><i class="fa fa-circle-o"></i> Change Password</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="dashboard_report.php">
            <i class="fa fa-edit"></i> <span>Report a problem</span>
          </a>
        </li>

        <li class="treeview ">
          <a name="logout" href="logout.php">
            <i class="glyphicon glyphicon-off"></i> <span>Sign Out</span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        400 Level Course Assignment
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Report</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-12">
      <div class="info-box">
      <div class="info-box-content">
          <div class=row>
            <div class="col-xs-12">
              <b><p class="pull-right text-success" id="dateCol">[Date Here]</p></b>
            </div>
          </div>

          <!-- //new stuff -->
          <!-- <center> -->
          <fieldset>
            
            <div class="row pad">
              <div class="col-sm-12">
              
                <form method="post" action="dashboard_400assign.php">
                <legend>Select Course</legend>
                  <div class="form-group">
                  <select name="course" class="form-control">
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 441</option>
                    <option value="CSC 411">CSC 421</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option>
                    <option value="CSC 411">CSC 411</option> 
                  </select>
              </div>
              <center>
                  <input type="submit" name="finder" class="btn btn-primary" value="find">
              </center> 
              <legend>View Candidates</legend>

                <?php
              if (isset($_POST['finder'])){
                $course = $_POST['course'];
                $sql = "select * from bidtb where Bid = '$course' order by Avg_score desc";

                $mydata = mysqli_query($conn,$sql);

                echo "<table class='table table-bordered table-hover dataTable'>
                        <tr> 
                            <th>Username</th>
                            <th>Level</th>
                            <th>Semester</th>
                            <th>Bidded Course</th>
                            <th>Taught Score</th>
                            <th>ScoreAssistant</th>
                            <th>Score As a Lead Lecturer</th>
                            <th>Profile Score</th>
                            <th>Average Score</th>
                        </tr>";
                        while ($row = mysqli_fetch_array($mydata)) {
                          echo "<tr>";
                          echo "<td>".$row['Username']."</td>";
                          echo "<td>".$row['Level']."</td>";
                          echo "<td>".$row['Semester']."</td>";
                          echo "<td>".$row['Bid']."</td>";
                          echo "<td>".$row['Taught_score']."</td>";
                          echo "<td>".$row['Assist_score']."</td>";
                          echo "<td>".$row['Lead_score']."</td>";
                          echo "<td>".$row['teachProfile_score']."</td>";
                          echo "<td>".$row['Avg_score']."</td>";
                          echo "</tr>";
                        }
                echo "</table>";
              }

              ?>

                  <input type="submit" name="Assign" class="form-control btn btn-block btn-primary" value="Assign">
                  
                </form>
              </div>
            </div>
          </fieldset>
          <fieldset>
          <br>
          <!-- </center> -->
        </div>
       </div>
      </div>
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Onwuakagba Obinna | </b> 13CG015967
    </div>
    <strong>Copyright &copy; 2017 </strong>
  </footer>
</div>
<!-- ./wrapper -->
<script>
      document.getElementById("dateCol").innerHTML = new Date().toDateString();
</script>
<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS 1.0.1 -->
<!--<script src="plugins/chartjs/Chart.min.js"></script>-->
<!--&lt;!&ndash; AdminLTE dashboard demo (This is only for demo purposes) &ndash;&gt;-->
<!--<script src="dist/js/pages/dashboard2.js"></script>-->
<!--&lt;!&ndash; AdminLTE for demo purposes &ndash;&gt;-->
<!--<script src="dist/js/demo.js"></script>-->
</body>
</html>

