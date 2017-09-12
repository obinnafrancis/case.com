<?php
/**
 * Created by PhpStorm.
 * User: Erne Francis
 * Date: 3/17/2017
 * Time: 11:25 AM
 */
 //    $conn = mysqli_connect("localhost","root","") or die("Could not connect to server".mysqli_error());
 //    mysqli_select_db($conn,"testt") or die(mysqli_error());
	$conn = mysqli_connect("localhost","root","") or die("Could not connect to server".mysqli_error());
    mysqli_select_db($conn,"project") or die(mysqli_error());
?>
