<?php
session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign_in</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid " style="font-size: large">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand" style="font-size: 20px"><span class="glyphicon glyphicon-home"></span> C.A.E.S</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav">
                <li ><a  href="index.php ">Home</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">About</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
                <li class="active"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </div>
    <div style="width: 100%; height:2px; background-color:#a94442;"></div>
</nav>

<br><br>
<div class="container">
    <div class="page-header">
        <h1>Sign-in to <strong class="text-danger">C.A.E.S</strong></h1>
    </div>
    <div class="widget-body">
        <div id="center-block">
            <center>
            <h4 class="text-center"> <span class="glyphicon glyphicon-lock "></span> Sign in</h4>
            <img src="images/logo.png" style="width: 25%; margin-top: -200px;" />
            </center>

            <form action="login.php" method="post">
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-user"></i>
                    </span>
                    <input type="text" name="user" class="form-control" placeholder="Enter Email or Username" required>
                </div><br>
                <div class="input-group">
                    <span class="input-group-addon">
                        <i class="glyphicon glyphicon-lock"></i>
                    </span>
                    <input type="password" name="pwd" class="form-control " placeholder="Enter your password" required>
                </div><br>

                <label class="radio-inline"><input type="radio" name="gg" value="Hod" >Hod</label>
                <label class="radio-inline pull-right"><input type="radio" name="gg" value="Lecturer">Lecturer</label>
                <br><br>
                <div>
                    <a href="recovery.php">Forgot password?</a>
                </div>
                <br>
                <div class="form-group ">
                    <input name="log" type="submit" class="form-control btn btn-block btn-primary" value="Sign in">
                </div>
            </form>

            <?php
                if(isset($_POST['log'])){
                    $username = $_POST['user'];
                    $password = $_POST['pwd'];
                    $tabu = $_POST['gg'];
                    if ($tabu == 'Hod'){
                        $qwer = "select * from hod where username='$username' AND password='$password'";
                    }
                    else if ($tabu == 'Lecturer') {
                        $qwer = "select * from register where username='$username' AND password='$password'";
                    }
                    //$qwer = "select * from sam where col9='$username' AND col8='$password'";
                    $qwe_run=mysqli_query($conn,$qwer);

                    if(mysqli_num_rows($qwe_run)>0){
                        $_SESSION['usrname']=$username;
                        if ($tabu == 'Hod'){
                            header('location:dashboard.php');
                        }
                        else if ($tabu == 'Lecturer'){
                            header('location:dashboard2.php');
                        }
                    }
                    else{
                        echo '<script type="text/javascript">alert("Invalid")</script>';
                    }
                }
            ?>

        </div>
    </div>

</div>
</body>
</html>
