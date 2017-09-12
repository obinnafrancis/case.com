<?php
session_start();
require 'connect.php';
?>
<?php
          $val = $_SESSION['usrname'];
          $qwer = "select * from register where username='$val'";
          $qwer_run = mysqli_query($conn,$qwer);
          if(mysqli_num_rows($qwer_run)>0)
          {
            // echo "<h2><center>Data available!</center></h2>";
            while ($row = mysqli_fetch_assoc($qwer_run)) 
            {
              $val2 = ucfirst($row["firstname"])." ".ucfirst($row["lastname"]);
              $val3 = $row["dob"];
              $val4 = $row["email"];
             // $val6 = $row["image"];
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
    <a href="dashboard2.php" class="logo">
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

                  <small style="color:yellow;">LECTURER</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="dashboard2.php" class="btn btn-default btn-flat">Profile</a>
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
          <center style="font-size: 12px"><a href="#"><i class="glyphicon glyphicon-user" style="color: green"></i> <?php echo $val;?></a></center>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="dashboard2.php">
            <i class="fa fa-dashboard"></i> <span>Lecturer's Dashboard</span>
          </a>
        </li>

        <li class="active treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Bid Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li ><a href="bid100.php"><i class="fa fa-circle-o"></i> 100 Level</a></li>
            <li><a href="bid200.php"><i class="fa fa-circle-o"></i> 200 Level</a></li>
            <li><a href="bid300.php"><i class="fa fa-circle-o"></i> 300 Level</a></li>
            <li class="active"><a href="bid400.php"><i class="fa fa-circle-o"></i> 400 Level</a></li>
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
            <li><a href="lec_settings.php"><i class="fa fa-circle-o"></i> Alter Details</a></li>
            <li><a href="lecPassword.php"><i class="fa fa-circle-o"></i> Change Password</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="dashboard2_report.php">
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
        Lecturer's Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
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
            <legend>Alpha Semester  <small><em>(Maximum of 3 selections)</em></small></legend>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3"><b>Selection</b> </div>
                <div class="col-sm-3"><b>Have you taught it before ?</b> </div>
                <div class="col-sm-3"><b>How many years as an assistant</b> </div>
                <div class="col-sm-3 "><b>How many years as Lead Lecturer</b></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid1a" class="form-control">
                <option></option>
                  <option value="csc 411">CSC 411</option>
                  <option value="csc 413">CSC 413</option>
                  <option value="csc 415">CSC 415</option>
                  <option value="csc 431">CSC 431</option>
                  <option value="csc 432">CSC 432</option>
                  <option value="csc 433">CSC 433</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1a" value="Yes" >Yes</label>
                <label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1a" value="No">No</label></div></div>
                <div class="col-sm-3"><input form ="fuzzy" class="form-control" type="Number" name="yrAs1a"></div>
                <div class="col-sm-3 "><input form ="fuzzy" class="form-control" type="Number" name="yrLe1a"></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid1b" class="form-control">
                <option></option>
                  <option value="csc 411">CSC 411</option>
                  <option value="csc 413">CSC 413</option>
                  <option value="csc 415">CSC 415</option>
                  <option value="csc 431">CSC 431</option>
                  <option value="csc 432">CSC 432</option>
                  <option value="csc 433">CSC 433</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1b" value="Yes" >Yes</label>
                <label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1b" value="No">No</label></div></div>
                <div class="col-sm-3"><input form ="fuzzy" class="form-control" type="Number" name="yrAs1b"></div>
                <div class="col-sm-3 "><input form ="fuzzy" class="form-control" type="Number" name="yrLe1b"></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid1c" class="form-control">
                <option></option>
                  <option value="csc 411">CSC 411</option>
                  <option value="csc 413">CSC 413</option>
                  <option value="csc 415">CSC 415</option>
                  <option value="csc 431">CSC 431</option>
                  <option value="csc 432">CSC 432</option>
                  <option value="csc 433">CSC 433</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1c" value="Yes" >Yes</label>
                <label class="radio-inline"><input form ="fuzzy" type="radio" name="gg1c" value="No">No</label></div></div>
                <div class="col-sm-3"><input form ="fuzzy" class="form-control" type="Number" name="yrAs1c"></div>
                <div class="col-sm-3 "><input form ="fuzzy" class="form-control" type="Number" name="yrLe1c"></div>
              </div>
            </div>
           <!--  <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-2"><b>Email:</b> </div>
                <div class="col-sm-10">[Email Here]</div>
              </div>
            </div> -->
          </fieldset>
          <fieldset>
          <br>
            <legend>Omega Semester  <small><em>(Maximum of 3 selections)</em></small></legend>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3"><b>Selection</b> </div>
                <div class="col-sm-3"><b>Have you taught it before ?</b> </div>
                <div class="col-sm-3"><b>How many years as an assistant</b> </div>
                <div class="col-sm-3 "><b>How many years as Lead Lecturer</b></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid2a" class="form-control">
                <option></option>
                  <option value="cis 421">CIS 421</option>
                  <option value="csc 423">CSC 423</option>
                  <option value="csc 424">CSC 424</option>
                  <option value="csc 441">CSC 441</option>
                  <option value="csc 443">CSC 443</option>
                  <option value="csc 444">CSC 444</option>
                  <option value="csc 446">CSC 446</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form="fuzzy" type="radio" name="gg2a" value="Yes" >Yes</label>
                <label class="radio-inline"><input form="fuzzy" type="radio" name="gg2a" value="No">No</label></div></div>
                <div class="col-sm-3"><input form="fuzzy" class="form-control" type="Number" name="yrAs2a"></div>
                <div class="col-sm-3 "><input form="fuzzy" class="form-control" type="Number" name="yrLe2a"></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid2b" class="form-control">
                <option></option>
                  <option value="cis 421">CIS 421</option>
                  <option value="csc 423">CSC 423</option>
                  <option value="csc 424">CSC 424</option>
                  <option value="csc 441">CSC 441</option>
                  <option value="csc 443">CSC 443</option>
                  <option value="csc 444">CSC 444</option>
                  <option value="csc 446">CSC 446</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form="fuzzy" type="radio" name="gg2b" value="Yes" >Yes</label>
                <label class="radio-inline"><input form="fuzzy" type="radio" name="gg2b" value="No">No</label></div></div>
                <div class="col-sm-3"><input form="fuzzy" class="form-control" type="Number" name="yrAs2b"></div>
                <div class="col-sm-3 "><input form="fuzzy" class="form-control" type="Number" name="yrLe2b"></div>
              </div>
            </div>
            <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3">
                <select form ="fuzzy" name="bid2c" class="form-control">
                <option></option>
                  <option value="cis 421">CIS 421</option>
                  <option value="csc 423">CSC 423</option>
                  <option value="csc 424">CSC 424</option>
                  <option value="csc 441">CSC 441</option>
                  <option value="csc 443">CSC 443</option>
                  <option value="csc 444">CSC 444</option>
                  <option value="csc 446">CSC 446</option>
                </select>
                </div>
                <div class="col-sm-3"><div style="padding-left: 50px;"><label class="radio-inline"><input form="fuzzy" type="radio" name="gg2c" value="Yes" >Yes</label>
                <label class="radio-inline"><input form="fuzzy" type="radio" name="gg2c" value="No">No</label></div></div>
                <div class="col-sm-3"><input form="fuzzy" class="form-control" type="Number" name="yrAs2c"></div>
                <div class="col-sm-3 "><input form="fuzzy" class="form-control" type="Number" name="yrLe2c"></div>
              </div>
            </div>
            <!-- <div class="row pad">
              <div class="col-sm-12">
                <div class="col-sm-3"><b>Number of unassigned courses:</b> </div>
                <div class="col-sm-4 "><div style="display: inline-block; padding: 5px;" class="label label-warning">[Value goes Here]</div></div>
              </div>
            </div> -->
          </fieldset>
          <div class="row pad">
            <form id="fuzzy" method="post" action="bid400.php">
            <input type="submit" value = "Bid" class = "btn btn-block btn-primary" name="btnbid">
          </form>
          <?php

            if (isset($_POST["btnbid"]))
            {

              $qsx = "select * from teachprofile where username = '$val'";
              $ty = mysqli_query($conn,$qsx);

              if(mysqli_num_rows($ty)>0)
              {
                // echo "<h2><center>Data available!</center></h2>";
                while ($row = mysqli_fetch_assoc($ty)) 
                {
                  
                  $pScore = $row["LProfile_score"];
                }
              }
              else
              {
                  $pScore = 0;
              }

            $bid11 = $_POST['bid1a']; $bid12 = $_POST['bid1b']; $bid13 = $_POST['bid1c'];
            $tt11 = $_POST['gg1a']; $tt12 = $_POST['gg1b']; $tt13 = $_POST['gg1c'];
            $yha11 = $_POST['yrAs1a']; $yha12 = $_POST['yrAs1b']; $yha13 = $_POST['yrAs1c'];
            $yhl11 = $_POST['yrLe1a']; $yhl12 = $_POST['yrLe1b']; $yhl13 = $_POST['yrLe1c'];

            $bid21 = $_POST['bid2a']; $bid22 = $_POST['bid2b']; $bid23 = $_POST['bid2c'];
            $tt21 = $_POST['gg2a']; $tt22 = $_POST['gg2b']; $tt23 = $_POST['gg2c'];
            $yha21 = $_POST['yrAs2a']; $yha22 = $_POST['yrAs2b']; $yha23 = $_POST['yrAs2c'];
            $yhl21 = $_POST['yrLe2a']; $yhl22 = $_POST['yrLe2b']; $yhl23 = $_POST['yrLe2c'];
             
            if ($tt11 == 'Yes')
            {
              $tscore11 = 0.8;
            }
            else if ($tt11 == 'No')
            {
              $tscore11 = 0.2;
            }
            if ($tt12 == 'Yes')
            {
              $tscore12 = 0.8;
            }
            else if ($tt12 == 'No')
            {
              $tscore12 = 0.2;
            }
            if ($tt13 == 'Yes')
            {
              $tscore13 = 0.8;
            }
            else if ($tt13 == 'No')
            {
              $tscore13 = 0.2;
            }
            if ($yha11 > 3){
              $Ascore11 = 0.7;
            }
            else if($yha11 > 1 and $yha11 <= 3){
              $Ascore11 = 0.2;
            }
            else
            {
              $Ascore11 = 0.1;
            }
            if ($yha12 > 3){
              $Ascore12 = 0.7;
            }
            else if($yha12 > 1 and $yha12 <= 3){
              $Ascore12 = 0.2;
            }
            else
            {
              $Ascore12 = 0.1;
            }
            if ($yha13 > 3){
              $Ascore13 = 0.7;
            }
            else if($yha13 > 1 and $yha13 <= 3){
              $Ascore13 = 0.2;
            }
            else
            {
              $Ascore13 = 0.1;
            }

#

            if ($yhl11 > 3){
              $Lscore11 = 0.7;
            }
            else if($yhl11 > 1 and $yhl11 <= 3){
              $Lscore11 = 0.2;
            }
            else
            {
              $Lscore11 = 0.1;
            }
            if ($yhl12 > 3){
              $Lscore12 = 0.7;
            }
            else if($yhl12 > 1 and $yhl12 <= 3){
              $Lscore12 = 0.2;
            }
            else
            {
              $Lscore12 = 0.1;
            }
            if ($yhl13 > 3){
              $Lscore13 = 0.7;
            }
            else if($yhl13 > 1 and $yhl13 <= 3){
              $Lscore13 = 0.2;
            }
            else
            {
              $Lscore13 = 0.1;
            }

            

            $avgScore11 = ($tscore11 + $Ascore11 + $Lscore11 + $pScore)/4;
            $avgScore12 = ($tscore12 + $Ascore12 + $Lscore12 + $pScore)/4;
            $avgScore13 = ($tscore13 + $Ascore13 + $Lscore13 + $pScore)/4;
############################################################################
            if ($tt21 == 'Yes')
            {
              $tscore21 = 0.8;
            }
            else if ($tt21 == 'No')
            {
              $tscore21 = 0.2;
            }
            if ($tt22 == 'Yes')
            {
              $tscore22 = 0.8;
            }
            else if ($tt22 == 'No')
            {
              $tscore22 = 0.2;
            }
            if ($tt23 == 'Yes')
            {
              $tscore23 = 0.8;
            }
            else if ($tt23 == 'No')
            {
              $tscore23 = 0.2;
            }
            if ($yha21 > 3){
              $Ascore21 = 0.7;
            }
            else if($yha21 > 1 and $yha21 <= 3){
              $Ascore21 = 0.2;
            }
            else
            {
              $Ascore21 = 0.1;
            }
            if ($yha22 > 3){
              $Ascore22 = 0.7;
            }
            else if($yha22 > 1 and $yha22 <= 3){
              $Ascore22 = 0.2;
            }
            else
            {
              $Ascore22 = 0.1;
            }
            if ($yha23 > 3){
              $Ascore23 = 0.7;
            }
            else if($yha23 > 1 and $yha23 <= 3){
              $Ascore23 = 0.2;
            }
            else
            {
              $Ascore23 = 0.1;
            }

#

            if ($yhl21 > 3){
              $Lscore21 = 0.7;
            }
            else if($yhl21 > 1 and $yhl21 <= 3){
              $Lscore21 = 0.2;
            }
            else
            {
              $Lscore21 = 0.1;
            }
            if ($yhl22 > 3){
              $Lscore22 = 0.7;
            }
            else if($yhl22 > 1 and $yhl22 <= 3){
              $Lscore22 = 0.2;
            }
            else
            {
              $Lscore22 = 0.1;
            }
            if ($yhl23 > 3){
              $Lscore23 = 0.7;
            }
            else if($yhl23 > 1 and $yhl23 <= 3){
              $Lscore23 = 0.2;
            }
            else
            {
              $Lscore23 = 0.1;
            }

            $avgScore21 = ($tscore21 + $Ascore21 + $Lscore21 + $pScore)/4;
            $avgScore22 = ($tscore22 + $Ascore22 + $Lscore22 + $pScore)/4;
            $avgScore23 = ($tscore23 + $Ascore23 + $Lscore23 + $pScore)/4;

             $qw = "INSERT into bidtb VALUES ('1','$val','400','first','$bid11','$tscore11','$Ascore11','$Lscore11','$pScore','$avgScore11')";
             $qww = "INSERT into bidtb VALUES ('2','$val','400','first','$bid12','$tscore12','$Ascore12','$Lscore12','$pScore','$avgScore12')";
             $qwww = "INSERT into bidtb VALUES ('3','$val','400','first','$bid13','$tscore13','$Ascore13','$Lscore13','$pScore','$avgScore13')";

             $qw1 = "INSERT into bidtb VALUES ('1','$val','400','second','$bid21','$tscore21','$Ascore21','$Lscore21','$pScore','$avgScore21')";
             $qww1 = "INSERT into bidtb VALUES ('2','$val','400','second','$bid22','$tscore22','$Ascore22','$Lscore22','$pScore','$avgScore22')";
             $qwww1 = "INSERT into bidtb VALUES ('3','$val','400','second','$bid23','$tscore23','$Ascore23','$Lscore23','$pScore','$avgScore23')";

              $kill = mysqli_query($conn,$qw) or die (mysqli_error());
              $killl = mysqli_query($conn,$qww) or die (mysqli_error());;
              $killll = mysqli_query($conn,$qwww) or die (mysqli_error());

              $kill1 = mysqli_query($conn,$qw1) or die (mysqli_error());
              $killl1 = mysqli_query($conn,$qww1) or die (mysqli_error());;
              $killll1 = mysqli_query($conn,$qwww1) or die (mysqli_error());
              if ($kill){
                  echo "<script>alert('Bid POsted')</script>";
              }

    }   
?>
          </div>
          
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
</body>
</html>
