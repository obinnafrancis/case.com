<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to C.A.E.S<</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>
<body>
<div id="hpage">
    <div class="filter">
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
                <li class="active"><a data-toggle="tab" href="#home">Home</a> </li>
                <li><a data-toggle="tab" href="#about">About</a> </li>
                <li><a data-toggle="tab" href="#contact">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </div>
    <div style="width: 100%; height:2px; background-color:#a94442;"></div>
</nav>

<br><br>
<div class="container">
    <div class="tab-content">
        <div id="home" class="tab-pane fade in active text-right">
            <h1 style="font-size: 800%; text-shadow: 4px 4px 8px black;" class="text-danger" >
                <small class="text-primary">Welcome to </small>C.A.E.S
            </h1>
            <h4 class="text-primary" style="color: white;text-shadow: 4px 4px 8px black;">
                <em >(Your Course AlLocation Expert System)</em>
            </h4>
        </div>
        <div id="about" class="tab-pane fade">
            <h1>
                This is the About Page
            </h1>
        </div>
        <div id="contact" class="tab-pane fade">
            <h1>
                This is the Contact Page
            </h1>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>