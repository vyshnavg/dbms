<?php
  session_start();
?>

<!DOCTYPE html>
<title>ChristUniversity_library login</title>
<style>

.container {
    padding: 5px;
}
tab{
	padding-left:2em;
}
.btn {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 4px 27px 6px 20px;
  border: 1px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Comic Sans MS", cursive, sans-serif;
  color: rgba(255,255,255,0.9);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: #0a1270;
  -webkit-box-shadow: 0 0 3px 1px rgba(118,118,188,1) ;
  box-shadow: 0 0 3px 1px rgba(118,118,188,1) ;
  text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
}
#textboxid
{
     display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  margin: 2px;
  padding: 10px 50px 10px 20px;
  border: 1px solid #b7b7b7;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  font: normal 16px/normal "Comic Sans MS", cursive, sans-serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-box-shadow: 0 0 6px 0 rgba(0,0,0,0.5) inset;
  box-shadow: 0 0 6px 0 rgba(0,0,0,0.5) inset;
  text-shadow: 1px 1px 0 rgba(255,255,255,0.66) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);

}
<!--container-->
.borderexample
{
border-style:solid;
border-color:black;
} .container1{
-webkit-box-shadow: -2px 6px 30px -3px rgba(0,0,0,0.51);
-moz-box-shadow: -2px 6px 30px -3px rgba(0,0,0,0.51);
box-shadow: -2px 6px 30px -3px rgba(0,0,0,0.51);
width:900px;
margin:auto;
}

</style>
<body>
<br></br><br></br><br></br>
<div class="container1">
<center><a href="ChristUniversity_library.php"><img src="images/logo2.png"></a></center>

<center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="container">
    <label><b><font size="4"></b></label>
    <input id="textboxid" type="text"  name="emailid" placeholder="USERNAME"required><br></br>

    <label><b><h4></b></label></font>
    <input id="textboxid" type="password"  name="pass" placeholder="PASSWORD" required><br></br>
        
	<button class="btn" type="reset">Clear</button><tab></tab>
    <button class="btn" type="submit">Login</button><br></br>
	
    <input type="checkbox" checked="checked"> Remember me
  </div>
</div>
<center><p>
       <?php
        //$conn = OpenCon();
        //$dbname = "library";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // collect value of input field
              $username = $_POST['emailid'];
              $password = $_POST['pass'];

              /*if (empty($username)||empty($password)) {
                  echo "Sorry, Please enter Email ID and Password";
              }
              else{*/
                //echo "Login Succesful";
                //mysql_connect("localhost","root","Qtel123%");
                
              /*
                $username=stripcslashes($username);
                $password=stripcslashes($password);
                $username=mysql_real_escape_string($username);
                $password=mysql_real_escape_string($password);

                

                $result=mysql_query("select * from admin where admin_id = '$username' and admin_password='$password'") or 
                        die("Failed to query database".mysql_error());
                $row=mysql_fetch_array($result);
                if($row['admin_id']==$username && $row['admin_password']==$password){
                  //echo "Login Success!! Welcome".$row['admin_id'];
                    header("Location: admin.php");
                }
                else{
                  echo"Failed to login";
                }


                */

                include 'dbh.php';
                //mysql_select_db("library");

                $sql="SELECT * from admin where admin_id = '$username' and admin_password='$password'";
                $result= mysqli_query($conn ,$sql)or die(mysqli_error($conn));

                if(!$row=mysqli_fetch_assoc($result)){
                  echo "Your username or password is incorrect!";
                }
                else{
                  $_SESSION['admin_id']=$row['admin_id'];
                  header("Location: admin.php");
                }


              //}
          }
          //CloseCon($conn);
          ?></p></center>
  
</form></center>

