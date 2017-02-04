<html>
<body>
<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<input type="text" placeholder="REGISTER NUMBER" name="regno" required></br></br>
<input type="password" placeholder="OLD PASSWORD" name="oldpass" required> </br></br>
<input type="password" placeholder="NEW PASSWORD" name="newpass" required> </br></br>
<input type="text" placeholder="NEW NAME" name="sname" required/></br></br>
<input type="text" placeholder="NEW BRANCH" name="branch" required></br></br>
<input type="text" placeholder="NEW COURSE" name="course" required></br></br>
<input type="text" placeholder="NEW SEMESTER" name="sem" required></br></br>
<input type="text" placeholder="NEW YEAROFADM" name="yoa" required></br></br>
<input type="submit" value="OK"></center>

</form>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
            	$opassword = $_POST['oldpass'];
            	$npassword = $_POST['newpass'];
            	$sname = $_POST['sname'];
            	$regno = $_POST['regno'];
            	$branch = $_POST['branch'];
            	$course = $_POST['course'];
            	$sem = $_POST['sem'];
            	$yoa = $_POST['yoa'];

                include 'dbh.php';
			   	
			   	$sql="SELECT * FROM student WHERE std_regno =$regno AND std_password=$opassword";

			   	$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
			   
			   	if(! $retval ) {
			   	   	die('Could not get data: ' . mysql_error($conn));
			   	}
			   	else if (mysqli_num_rows($retval) > 0){
			   		
			   		echo "Found<br>";
			   		
			   		$sql="UPDATE student SET std_password=$npassword,student_name=$sname,branch=$branch,course=$course,semester=$sem,yearof_adm=$yoa  WHERE std_password=$opassword";

			   		$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));

			   		if($retval==1){
                      echo "Successfully Updated";
                    }
                    else{
                      echo "Failed to query database ".mysqli_error($conn);
                    }

			   	}
			   	else{
			   		echo "Not found or Wrong password";
			   	}
          }
          ?>
          	
          </p></center>
</body>
</html>