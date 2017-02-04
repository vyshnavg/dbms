<html>
<body>
	<?php
		include 'dbh.php';
		$result = mysqli_query($conn,"SELECT std_regno,std_password,student_name,branch,course,semester,yearof_adm FROM student")or die(mysqli_error($conn));
		
		echo "<table border='1'><tr><th>RegNo</th><th>Password</th><th>Name</th><th>Branch</th><th>course</th><th>semester</th><th>yearof_adm</th></tr>";
		
		while($row = mysqli_fetch_array($result)){
    		print "<tr><td>".$row['std_regno']."</td><td>".$row['std_password']."</td><td>".$row['student_name']."</td><td>".$row['branch']."</td><td>".$row['course']."</td><td>".$row['semester']."</td><td>".$row['yearof_adm']."</td></tr>";
		}
		print "</table>";
		//mysql_close($con);
	?>
</body>
</html>