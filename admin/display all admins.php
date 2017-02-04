<html>
<body>
	<?php
		include 'dbh.php';
		$result = mysqli_query($conn,"SELECT admin_id,admin_password FROM admin")or die(mysqli_error($conn));
		
		echo "<table border='1'><tr><th>Admin ID</th><th>Admin Password</th></tr>";
		
		while($row = mysqli_fetch_array($result)){
    		print "<tr><td>".$row['admin_id']."</td><td>".$row['admin_password']."</td></tr>";
		}
		print "</table>";
		//mysql_close($con);
	?>
</body>
</html>