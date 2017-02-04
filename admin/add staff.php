<html>
<body>
<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="NAME" name="sname" required/></br></br>
<input type="text" placeholder="STAFF ID" name="sid" required/></br></br>
<input type="password" placeholder="PASSWORD" name="pass" required></br></br>
<input type="text" placeholder="DEPARTMENT" name="dep" required></br></br>
<input type="text" placeholder="DESIGNATION" name="des" required></br></br>
<input type="submit" value="OK"></center>

</form>
<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              	$sname = $_POST['sname'];
            	$pass = $_POST['pass'];
            	$sid = $_POST['sid'];
            	$dep = $_POST['dep'];
            	$des = $_POST['des'];

                include 'dbh.php';

                $sql="INSERT INTO staff VALUES ('$sid','$sname','$pass','$dep','$des')";

                //$result= mysql_query($sql);
                $retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));

                if($retval==1){
                	echo "Successfully Added";
                }
                else{
                	echo "Failed to query database ".mysql_error($conn);
                }
          }
          ?>
          	
          </p></center>
</body>
</html>