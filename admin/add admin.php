
<html>
<body>

<center></br></br></br></br></br></br></br></br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="NAME" name="emailid" required></br></br>
<input type="password" placeholder="PASSWORD" name="pass" required></br></br>
<input type="submit" value="OK"></center>
</form>
<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $username = $_POST['emailid'];
              $password = $_POST['pass'];

                include 'dbh.php';
                mysql_select_db("library");

                $sql="INSERT INTO admin VALUES ('$username','$password')";

                $result= mysql_query($sql);
                
                if($result==1){
                	echo "Successfully Added";
                }
                else{
                	echo "Failed to query database ".mysql_error();
                }
          }
          ?>
          	
          </p></center>
</body>
</html>