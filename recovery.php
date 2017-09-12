<?php
session_start();
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
            <a href="index.php" class="navbar-brand" style="font-size: 20px"><span class="glyphicon glyphicon-home"></span> C.A.S.E</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#myNav">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="myNav">
            <ul class="nav navbar-nav">
                <li ><a  href="index.php">Home</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">About</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
                <li ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </div>
    
</nav>
<div style="width: 100%; height:2px; background-color:#a94442;"></div>

<br><br>
<div class="container">
    <div class="page-header">
        <h1>Recover your Account </h1>
    </div>

    <div class="widget-body">

        <div id="center-block " class="tab-content">

            <div id="step1" class="tab-pane fade in active">
                <h2 class="text-center text-primary">  Step 1:<small>Enter your email address</small></h2>
                <form id="form1">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input type="email" name="user" class="form-control text-center" placeholder="example@gmail.com">
                    </div>
                    <div class="btnz">
                        <br>
                        <input type="submit" class="btn-primary pull-right" style="border-radius: 10px; max-width:100px;" data-toggle="tab" href="#step2" value="Next">
<!--                        <ul class="pager active" >-->
<!--                            <li class="next " style="border: 2px"><a data-toggle="tab" href="#step2">Next </a> </li>-->
<!--                        </ul>-->
                    </div>
                </form>

                <br><br>
                <div class="text-center text-primary">
                    <p>1/3</p>
                </div>
            </div>

            <div id="step2" class="tab-pane fade">
                <h2 class="text-center text-primary">  Step 2:<small>Answer the security questions</small></h2>
                <h3><small>Question1: What is the name of your Pet?</small></h3>
<!--                <form id="form1">-->
                    <div class="form-group">
                        <input type="text" name="ans1" class="form-control text-center" placeholder="Answer">
                    </div>
<!--                </form>-->
                <h3><small>Question2: What is the name of your Primary School?</small></h3>
                <input form="form1" type="text" name="ans2" class="form-control text-center" placeholder="Answer">
                <h3><small>Question3: What is the name of your Best Friend?</small></h3>
                <input form="form1" type="text" name="ans3" class="form-control text-center" placeholder="Answer">
                <div class="btnz">
                    <br>
                    <input type="submit" class="btn-primary pull-left" style="border-radius: 10px; max-width:100px;" data-toggle="tab" href="#step1" value="Previous">
                    <input type="submit" class="btn-primary pull-right" style="border-radius: 10px; max-width:100px;" data-toggle="tab" href="#step3" value="Next">
<!--                    <ul class="pager">-->
<!--                        <li class="prev" style="float: left"><a data-toggle="tab" href="#step1">Previous</a></li>-->
<!--                        <li class="next "><a data-toggle="tab" href="#step3">Next </a> </li>-->
<!--                    </ul>-->
                </div>
                <br><br>
                <div class="text-center text-primary">
                    <p>2/3</p>
                </div>
            </div>

            <div id="step3" class="tab-pane fade">
                <h2 class="text-center text-primary">  Step 3:<small>Password has been reset. Please check your Email</small> <span class="glyphicon glyphicon-ok small" style="color: #00a65a;"></span></h2>
                <div class="btnz">
                    <br>
                    <input type="button" class="btn-primary pull-right" style="border-radius: 10px; max-width:100px;" href="../login.php" value="Finish">
<!--                    <ul class="pager">-->
<!--                        <li class="next "><a href="login.php">Finish </a> </li>-->
<!--                    </ul>-->
                </div>
                <br><br>
                <div class="text-center text-primary">
                    <p>3/3</p>
                </div>
            </div>


        </div>
    </div>

</div>
</body>
</html>