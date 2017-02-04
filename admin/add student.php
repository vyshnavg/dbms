<html>
<body>

<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="NAME" name="sname" required/></br></br>
<input type="password" placeholder="PASSWORD" name="pass" required></br></br>
<input type="text" placeholder="REGISTER NUMBER" name="regno" required></br></br>
<input type="text" placeholder="BRANCH" name="branch" required></br></br>
<input type="text" placeholder="COURSE" name="course" required></br></br>
<input type="text" placeholder="SEMESTER" name="sem" required></br></br>
<input type="text" placeholder="YEAROFADM" name="yoa" required></br></br>
<input type="submit" value="OK"></center>
</form>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	$sname = $_POST['sname'];
            	$pass = $_POST['pass'];
            	$regno = $_POST['regno'];
            	$branch = $_POST['branch'];
            	$course = $_POST['course'];
            	$sem = $_POST['sem'];
            	$yoa = $_POST['yoa'];

                include 'dbh.php';

                $sql="INSERT INTO student VALUES ('$regno','$pass','$sname','$branch','$course','$sem','$yoa')";

                //$result= mysql_query($sql);
                $retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));

                if($retval==1){
                	echo "Successfully Added";
                }
                else{
                	echo "Failed to query database ".mysqli_error($conn);
                }
          }
          ?>
          	
          </p></center>

</body>
</html>