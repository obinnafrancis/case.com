<?php
include("connect.php");
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
   if($pa==$cpa)
   {
	   $user=username_gen($fn,$ln);
	   $qwer="select * from sam where col9='$user'";
	   $qwer_run=mysqli_query($conn,$qwer);
	   if(mysqli_num_rows($qwer_run)>0)
	   {
	   		echo '<script type="text/javascript">alert("User already exists")</script>';
	   }
	   else
	   {
	   		$qwery = "INSERT INTO sam values ('$fn','$ln','$ge','$dob','$ph','$em','$ad','$pa','$user')";
	   		$qwer_run = mysqli_query($conn, $qwery)or die(mysqli_error());
	   		if($qwer_run){
	   			echo '<script type="text/javascript">alert("Registration Successful. Advance  to Login")</script>';
	   			header('location:login.php');
	   		}
	   		else
	   		{
	   			echo '<script type="text/javascript">alert("Error")</script>';
	   		}
   		}
   }
   
   // echo "<div class=modal><h1>signup successful <a href='login.php'>GoBack</a></h1></div>";
}
else
{
   var_dump($_POST);
}
?>