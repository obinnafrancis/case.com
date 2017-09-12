<?php
	session_start();
	session_destroy();
	// $_SESSION['usrname']="";
  	echo "<script type='text/javascript'>alert('You have been Logged Out !')</script>";
  	echo("<script>window.location = 'login.php'</script>");
?>