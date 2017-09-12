<?php
//session_start();
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign_in</title>
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/datepicker3.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
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
                <li ><a  href="index.php">Home</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">About</a> </li>
                <li class="disabled"><a data-toggle="tab" href="#">Contact</a> </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="registration.php"><span class="glyphicon glyphicon-user"></span> SignUp</a> </li>
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a> </li>
            </ul>
        </div>
    </div>
    <div style="width: 100%; height:2px; background-color:#a94442;"></div>
</nav>

<br><br>
<div class="container">
    <div class="page-header">
        <h1>SignUp to <strong class="text-danger">C.A.E.S</strong></h1>
    </div>


            <form action="registration.php" method="post" class="form-horizontal">
                <fieldset>
                    <legend>Bio-Data</legend>
                    <!-- <div class="form-group">
                        <div class="col-sm-2">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <label class="control-label" for="ro">  Role:</label>
                        </div>
                        <div class="col-sm-10">
                            <select name="role" id="ro" class="form-control">
                                <option >--Select your Role--</option>
                                <option value="HOD">HOD</option>
                                <option value="Lecturer">Lecturer</option>
                            </select>
                        </div>

                    </div> -->

                    <!-- <div class="form-group">
                        <div class="col-sm-2">
                            <i class="glyphicon glyphicon-envelope"></i>
                            <label class="control-label" for="dsig">  Designation:</label>
                        </div>
                        <div class="col-sm-10">
                            <select name="desig" id="dsig" class="form-control">
                                <option value="HOD">Prof.</option>
                                <option value="HOD">Dr.</option>
                                <option value="Lecturer">Mr.</option>
                                <option value="HOD">Mrs.</option>
                            </select>
                        </div>

                    </div> -->

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
                            <i class="glyphicon glyphicon-flag"></i>
                            <label class="control-label">  Gender:</label>
                        </div>
                        <div class="col-sm-4">
                            <label class="radio-inline"><input type="radio" name="gg" value="Male" >Male</label>
                            <label class="radio-inline"><input type="radio" name="gg" value="Female">Female</label>
                        </div>
                        <div class="col-sm-2">
                            <i class="glyphicon glyphicon-calendar"></i>
                            <label class="control-label" for="dob">  Date of Birth:</label>
                        </div>
                        <div class="col-sm-4 input-group date" data-provide="datepicker" style="max-width: 31.9%; margin-left:510px">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-calendar"></i>
                        </span>
                            <input type="text" name="dob" id="dob" class="form-control" required placeholder="Enter your date of birth">
                        </div>
                    </div>

                    <!--                <div class="form-group">-->
                    <!--                    <div class="col-sm-2">-->
                    <!--                        <i class="glyphicon glyphicon-calendar"></i>-->
                    <!--                        <label class="control-label" for="dob">  Date of Birth:</label>-->
                    <!--                    </div>-->
                    <!---->
                    <!--                    <div class="col-sm-10 input-group date" data-provide="datepicker" style="max-width: 80.5%; margin-left:210px">-->
                    <!--                        <span class="input-group-addon">-->
                    <!--                            <i class="glyphicon glyphicon-calendar"></i>-->
                    <!--                        </span>-->
                    <!--                        <input type="text" name="dob" id="dob" class="form-control" placeholder="Enter your date of birth">-->
                    <!--                    </div>-->
                    <!---->
                    <!---->
                    <!--                </div>-->

                    <!--                <div class="form-group">-->
                    <!--                    <div class="col-sm-2">-->
                    <!--                        <i class="glyphicon glyphicon-heart"></i>-->
                    <!--                        <label class="control-label" for="mstaus">  Marital Status:</label>-->
                    <!--                    </div>-->
                    <!--                    <div class="col-sm-10">-->
                    <!--                        <input type="text" name="mstatus" id="mstaus" class="form-control" placeholder="Enter your Marital Status">-->
                    <!--                    </div>-->
                    <!---->
                    <!--                </div>-->

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
                            <i class="glyphicon glyphicon-lock"></i>
                            <label class="control-label" for="pass">  Password:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" name="pwd" id="pass" class="form-control" required placeholder="Enter your Password">
                        </div>
                        <div class="col-sm-2">
                            <i class="glyphicon glyphicon-lock"></i>
                            <label class="control-label" for="pass2">  Confirm Password:</label>
                        </div>
                        <div class="col-sm-4">
                            <input type="password" name="cpwd" id="pass2" class="form-control" required placeholder="Enter your Password">
                        </div>
                    </div>
                    <!-- <center> -->
                        <!-- <div class="form-group">
                            <div class="col-sm-2">
                                <i class="glyphicon glyphicon-film"></i>
                                <label class="control-label" for="phto">  Profile Photo:</label>
                            </div>
                            <div class="col-sm-2">
                                <input type="file" name="image" id="file" class="inputfile" required>
                                <label for="file"><i class="glyphicon glyphicon-upload"></i> Choose a file</label>
                            </div>
                
                        </div> -->

                    <!-- </center> -->

                </fieldset>


                    <br>
                    <div class="form-group ">
                        <input name="signn" type="submit" class="form-control btn btn-block btn-primary" value="Sign Up">
                    </div>

            </form>
            <?php
                function username_gen($name1,$name2){
                $val1=substr(strtoupper($name1), 0,1);
                $val4=$val1.".";
                $val2=substr(strtolower($name2), 0);
                return $val4.$val2;
            }
            if(isset($_POST["signn"]))
            {
                   $fn= $_POST["first"];
                   $ln=$_POST["last"];
                   $em=$_POST["email"];
                   $ad=$_POST["address"];
                   $dob=$_POST["dob"];
                   $ge=$_POST["gg"];
                   $ph=$_POST["contact"];
                   $pa=$_POST["pwd"];
                   $cpa=$_POST["cpwd"];
                   $blank = '';
                   
                    // $upload_image = $_FILES["image"]["name"];
                    // $folder = "/xampp/htdocs/case/images/";
                    // move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);
                    // $file = '/xampp/htdocs/case/images/'.$_FILES["image"]["name"];

                    // $uploadimage = $folder.$_FILES["image"]["name"];
                    // $newname = $_FILES["image"]["name"];

                    // $resize_image = $folder.$newname."_resize.jpg";
                    // $actual = $folder.$newname.".jpg";

                    // list($width,$height) = getimagesize($uploadimage);
                    // $newwidth = 160;
                    // $newheight = 160;

                    // $thumb = imagecreatetruecolor($newwidth, $newheight);
                    // $source = imagecreatefromjpeg($resize_image);
                    // imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);

                    // imagejpeg($thumb,$resize_image,100);
                    // $out_img = addslashes(file_get_contents($resize_image));

               if($pa==$cpa)
               {
                   $user=username_gen($fn,$ln);
                   // $qwer="select * from frank where Username='$user' or Email='$user'";
                   $qwer="select * from register where Username='$user' or Email='$user'";
                   $qwer_run=mysqli_query($conn,$qwer);
                   if(mysqli_num_rows($qwer_run)>0)
                   {
                        echo "<script type='text/javascript'>alert('User already exists')</script>";
                   }
                   else
                   {
                        // $qwery = "INSERT INTO frank values ('$fn','$ln','$ge','$dob','$ph','$em','$ad','$pa','$user','$out_img')";
                    $qwery = "INSERT INTO register values ('$blank','$fn','$ln','$ge','$dob','$ph','$em','$ad','$user','$pa')";
                        $qwer_run = mysqli_query($conn, $qwery)or die(mysqli_error());
                        if($qwer_run){
                            ob_start();
                            // header('location:login.php');
                            echo "<script type='text/javascript'>alert('Registration Successful. Advance  to Login')</script>";
                            echo("<script>window.location = 'login.php'</script>");
                            ob_end_flush();
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Error in posting record'+<?php mysqli_error(); ?>)</script>";
                        }
                    }
               }
               else{
                     echo "<script type='text/javascript'>alert('Password and Confirm password do not match !')</script>";
               }
               // echo "<div class=modal><h1>signup successful <a href='login.php'>GoBack</a></h1></div>";
            }
            // else
            // {
            //    var_dump($_POST);
            // }
        ?>



</div>







</body>
</html>