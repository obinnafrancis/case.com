<?php
session_start();
require 'connect.php';
?>
<html>
<body>
<?php
	$sql = "select * from bidtb";
	$res = mysqli_query($conn,$sql);
	$i=0;
?>
	<form method="post" action="capua.php">
	<table border="1">
		<tr>
			<th>Username</th>
			<th>Bid</th>
		</tr>
		<?php
			while ($abc = mysqli_fetch_array($res)) {
				echo "<tr>";
				echo "<td>";
				echo '<input type="text" value ="'.$abc['Username'].'" name = "user'.$i.'">';
				echo "</td>";
				// echo "</tr>";
				// echo "<tr>";
				echo "<td>";
				echo '<input type="text" value ="'.$abc['Bid'].'" name = "course'.$i.'">';
				echo "</td>";

				echo "<td>";
				echo '<input type="submit" value ="update" name = "address'.$i.'">';

				if (isset($_POST['address'.$i.''])){
					$jin = $_POST['user'.$i.''];
					$in = $_POST['course'.$i.''];

					$qwe = "INSERT INTO allocation values ('$jin','$in')";
					$run = mysqli_query($conn,$qwe);

					if (!$run){
							echo "error";
					}
					else{
							header("location:capua.php");
					}
				}


				echo "</td>";
			}
		?>
	</table>
</body>
</html>
