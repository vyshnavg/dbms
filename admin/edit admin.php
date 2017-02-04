<html>
<body>

<center></br></br></br></br></br></br></br></br><p>ADMIN EDIT : </p></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="NAME" name="emailid" required /></br></br>
<input type="password" placeholder="OLD PASSWORD" name="oldpass" required> </br></br>
<input type="password" placeholder="NEW PASSWORD" name="newpass" required> </br></br>
<input type="submit" value="FINISH"></center>
</form>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['emailid'];
              $opassword = $_POST['oldpass'];
              $npassword = $_POST['newpass'];

                include 'dbh.php';
                


                /*$result= mysql_query($sql);
                
                if($result==1){
                	echo "Successfully FOUND";
                }
                else{
                	echo "Failed to query database ".mysql_error();
                }*/

                //$sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';
			   	//mysql_select_db('test_db');


			   	
			   	$sql="SELECT * FROM admin WHERE admin_id =$username AND admin_password=$opassword";

			   	$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
			   
			   	if(! $retval ) {
			   	   	die('Could not get data: ' . mysql_error($conn));
			   	}
			   	else if (mysqli_num_rows($retval) > 0){
			   		echo "Found<br>";
			   		
			   		$sql="UPDATE admin SET admin_password=$npassword WHERE admin_password=$opassword";

			   		$retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));

			   		if($retval==1){
                      echo "Successfully Updated";
                    }
                    else{
                      echo "Failed to query database ".mysqli_error($conn);
                    }

			   	}
			   	else{
			   		echo "not found";
			   	}
          }
          ?>
          	
          </p></center>
</body>
</html>