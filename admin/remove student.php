<html>
<body>
<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="REGISTER NUMBER" name="emailid" required/></br></br>
<input type="submit" value="REMOVE"></center>

</form>
<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['emailid'];
              //$password = $_POST['pass'];

                include 'dbh.php';

                $sql="SELECT * FROM student WHERE std_regno =$username ";

                $retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
               
                if(! $retval ) {
                   die('Could not get data: ' . mysql_error($conn));
                }
                else if (mysqli_num_rows($retval) > 0){
                    
                    $sql="DELETE FROM student WHERE std_regno =$username ";
                    $retval = mysqli_query($conn ,$sql)or die(mysqli_error($conn));
                    if($retval==1){
                      echo "Successfully Deleted";
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