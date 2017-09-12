<?php
/**
 * Created by PhpStorm.
 * User: Erne Francis
 * Date: 3/17/2017
 * Time: 11:25 AM
 */
include("connect.php");
if (isset($_POST["signin"])) {
	$username = $_POST["user"];
	$password = $_POST["pwd"];

	$qwer = "select * from sam where col9='$username' and col8='$password'";
	$qwe_run=mysqli_query($conn,$qwer);
	if(mysqli_num_rows($qwe_run)>0){
		//valid user
		$_session['username'] = $username;
		echo $_session['username'];
		//header('location:dashboard.php');
	}
	else{
		echo "error";
	}

}

?>