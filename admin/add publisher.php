<html>
<body><center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<input type="text" placeholder="PUBLISHER NAME" name="pname" required></br></br>
<input type="text" placeholder="PUBLISHER ADDRESS" name="padd" required></br></br>
<input type="text" placeholder="EMAIL ID(Optional)" name="emailid" ></br></br>
<input type="number" placeholder="CONTACT(Optional)" name="contact" ></br></br>
<input type="submit" value="ADD"></br></br></center>

</form>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	$pname = $_POST['pname'];
            	$padd = $_POST['padd'];
            	$emailid = $_POST['emailid'];
            	$contact = $_POST['contact'];

                include 'dbh.php';

                $sql="INSERT INTO publisher (publ_name, publ_addr, email_id, contact) VALUES ('$pname','$padd','$emailid','$contact')";

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