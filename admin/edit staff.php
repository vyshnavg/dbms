<html>
<body>
<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<input type="text" placeholder="STAFF ID" name="sid" required/></br></br>
<input type="password" placeholder="OLD PASSWORD" name="oldpass" required> </br></br>
<input type="password" placeholder="NEW PASSWORD" name="newpass" required> </br></br>
<input type="text" placeholder="NAME" name="sname" required/></br></br>
<input type="text" placeholder="DEPARTMENT" name="dep" required></br></br>
<input type="text" placeholder="DESIGNATION" name="des" required></br></br>
<input type="submit" value="OK"></center>

</form>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
            	$opassword = $_POST['oldpass'];
            	$npassword = $_POST['newpass'];
            	$sid = $_POST['sid'];
            	$sname = $_POST['sname'];
            	$dep = $_POST['dep'];
            	$des = $_POST['des'];
            	$sid = $_POST['sid'];

                include 'dbh.php';
			   	
			   	$sql="SELECT * FROM staff WHERE staff_id =$sid AND password=$opassword";

			   	$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
			   
			   	if(! $retval ) {
			   	   	die('Could not get data: ' . mysql_error($conn));
			   	}
			   	else if (mysqli_num_rows($retval) > 0){
			   		
			   		echo "Found<br>";
			   		
			   		$sql="UPDATE staff SET password=$npassword,staff_name=$sname,department=$dep,designation=$des  WHERE password=$opassword";

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