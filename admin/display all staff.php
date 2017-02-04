<html>
<body>
	<?php
		include 'dbh.php';
		$result = mysqli_query($conn,"SELECT staff_id,staff_name,password,department,designation FROM staff")or die(mysqli_error($conn));
		
		echo "<table border='1'><tr><th>ID</th><th>Name</th><th>Password</th><th>Department</th><th>Designation</th></tr>";
		
		while($row = mysqli_fetch_array($result)){
    		print "<tr><td>".$row['staff_id']."</td><td>".$row['staff_name']."</td><td>".$row['password']."</td><td>".$row['department']."</td><td>".$row['designation']."</td></tr>";
		}
		print "</table>";
		//mysql_close($con);
	?>
</body>
</html>