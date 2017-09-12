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
  <title>C.A.S.E | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="css/mystyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <link rel="stylesheet" href="css/datepicker3.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="myscript.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

    <a href="dashboard.php" class="logo">
      <span class="logo-mini"><b>C</b>S</span>
      <span class="logo-lg "><span class="glyphicon glyphicon-home"> </span> <b>E</b>.C.A.S</span>
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
                  <!-- <form action="dashboard.php" method="post">
                    <input type="submit" class="btn btn-default btn-flat" name="logout" value="Sign out">
                  </form> -->
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

        <li class="treeview">
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
            <li><a href="dashboard_400assign.php"><i class="fa fa-circle-o"></i> 400 Level</a></li>
          </ul>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-gears"></i>
            <span>Manage Account</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="hod_settings.php"><i class="fa fa-circle-o"></i> Alter Details</a></li>
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
        Report a problem
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

          <a href="#" class="name" data-toggle="collapse" data-target="#deo" style="text-decoration: none;">
              <legend>Manage Your Teaching Profile<span class="glyphicon glyphicon-menu-down"></span>
              </legend>
          </a>

              <div id= "deo" class="contain collapse">
                <div class="col-sm-12 form-group">
                  <label for="sel1"><h4>Status</h4></label>
                  <select class="form-control" id="sel1">
                    <option></option>
                    <option>Prof.</option>
                    <option>Dr.</option>
                    <option>Snr. Lecturer</option>
                    <option>Jnr. Lecturer</option>
                  </select>
                </div>
                <div class="col-sm-12 form-group">
                  <!-- <label for="sel1"> --><h4>Experience</h4><!-- </label> -->
                  <!-- <select class="form-control" id="sel1"> -->
                    <div class="col-sm-6">
                      <label for="sel1"><h4>Assistant Lecturer</h4></label>
                        <input type="number" class="form-control" name="yrJnr" placeholder="No. of years as an Assistant Lecturer">
                    </div>
                    <div class="col-sm-6">
                      <label for="sel1"><h4>Head Lecturer</h4></label>
                        <input type="number" class="form-control" name="yrSnr" placeholder="No. of years as a Head Lecturer">
                    </div>
                </div>
                <form name="form1" onsubmit="return false;" id="dom">
                    <div class="col-sm-5 pull-left">
                        <h4>Research Topics</h4>
                        <select name="leftList" class="form-control" size="10">
                            <option value="A">Artificial Intelligence</option>
                            <option value="B">Bioinformatics and Computational Biology</option>
                            <option value="C">Computer Architecture and Engineering</option>
                            <option value="D">Data Mining, Machine Learning and Natural Computation</option>
                            <option value="E">Formal Methods</option>
                            <option value="F">Graphics and Visualization</option>
                            <option value="G">Human Computer Interaction (HCI)</option>
                            <option value="H">Operating Systems, Distributed Systems and Networking</option>
                            <option value="I">Programming Languages and Implementation</option>
                            <option value="J">Scientific Computing</option>
                            <option value="K">Security</option>
                            <option value="L">Theory of Computer Science</option>
                        </select>
                    </div>
                <center>
                    <div class = "col-sm-2" style="padding-top: 7%">
                      <button class="btn btn-primary" onclick="moveRight()" style="display: block;"> >> </button>
                      <br>
                      <button class="btn btn-primary" onclick="moveLeft()"> << </button>
                    </div>
                </center>
                    <div class="col-sm-5 pull-right">
                        <h4>Research Conducted</h4>
                        <select placeholder="" name="rightList" class="form-control" size="10">
                            
                        </select>
                        <br>
                    </div>
                    <br>
                </form>
                </div>


              <!-- End of Manage Teach profile-->


          <a href="#" class="name" data-toggle="collapse" data-target="#demo" style="text-decoration: none;">
              <legend>Manage Your Profile<span class="glyphicon glyphicon-menu-down"></span>
              </legend>
          </a>
            <div class="row pad collapse" id="demo">
              <div class="col-sm-12">
                <form method="post" action="hod_settings.php" id="prof" class="form-horizontal">
                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-user"></i>
                      <label class="control-label" for="firstname">  Firstname:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="first" id="firstname" class="form-control" required placeholder="Enter your Firstname">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-user"></i>
                      <label class="control-label" for="lastname">  Lastname:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="last" id="lastname" class="form-control" required placeholder="Enter your Lastname">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-home"></i>
                      <label class="control-label" for="address">  Address:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="text" name="address" id="address" class="form-control" required placeholder="Enter your Address">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-calendar"></i>
                      <label class="control-label" for="dob">  Date of Birth:</label>
                    </div>
                    <div class="col-sm-9 input-group date" data-provide="datepicker" style="max-width: 30%; margin-left:223px">
                      <span class="input-group-addon">
                          <i class="glyphicon glyphicon-calendar"></i>
                      </span>
                      <input type="text" name="dob" id="dob" class="form-control" required placeholder="Enter your date of birth">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-earphone"></i>
                      <label class="control-label" for="phone">  Phone Number:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="number" name="contact" id="phone" class="form-control" required placeholder="Enter your Phone Number">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-2">
                      <i class="glyphicon glyphicon-envelope"></i>
                      <label class="control-label" for="mail">  Email:</label>
                    </div>
                    <div class="col-sm-10">
                      <input type="email" name="email" id="mail" class="form-control" required placeholder="Enter your Email Address">
                    </div>
                  </div>

                  <input type="submit" name="submit" class="form-control btn btn-block btn-primary" value="Update Record">
                </form>
              </div>
            </div>        
          </fieldset>
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
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
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

