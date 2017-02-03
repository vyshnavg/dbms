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
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #0e3b57);
  background-image: -moz-linear-gradient(top, #3498db, #0e3b57);
  background-image: -ms-linear-gradient(top, #3498db, #0e3b57);
  background-image: -o-linear-gradient(top, #3498db, #0e3b57);
  background-image: linear-gradient(to bottom, #3498db, #0e3b57);
  -webkit-border-radius: 8;
  -moz-border-radius: 8;
  border-radius: 8px;
  font-family: Arial;
  color: #ffffff;
  font-size: 11px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
#textboxid
{
    height:15px;
    font-size:14pt;
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
<center><img src="images/logo2.png"></center>

<center><form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
  <div class="container">
    <label><b><font size="4">Username</b></label>
    <input id="textboxid" type="text"  name="emailid" required><br></br>

    <label><b><h4>Password</b></label></font>
    <input id="textboxid" type="password"  name="pass" required><br></br>
        
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

              if (empty($username)||empty($password)) {
                  echo "Sorry, Please enter Email ID and Password";
              }
              else{
                //echo "Login Succesful";
                mysql_connect("localhost","root","Qtel123%");
                mysql_select_db("library");

                $username=stripcslashes($username);
                $password=stripcslashes($password);
                $username=mysql_real_escape_string($username);
                $password=mysql_real_escape_string($password);

                

                $result=mysql_query("select * from admin where admin_id = '$username' and admin_password='$password'") or 
                        die("Failed to query database".mysql_error());
                $row=mysql_fetch_array($result);
                if($row['admin_id']==$username && $row['admin_password']==$password){
                  echo "Login Success!! Welcome".$row['admin_id'];
                }
                else{
                  echo"Failed to login";
                }
                
                
              }
          }


          //CloseCon($conn);
          ?></p></center>
  
</form></center>

