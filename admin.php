<!DOCTYPE html>
<head>
<title>CHRIST UNIVERSITY_LIBRARY</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
<link rel="icon" href="https://upload.wikimedia.org/wikipedia/en/4/48/This_is_the_graphical_mascot_of_Christ_University,_Bangalore.png">
</head>
<style>
#heading
{
	#heading { color: #FFFFFF; }
}
span.highlight {
    background-color: white;
}
.top-bar {
    height: 35px;
    width: 100%;
    padding-top: 5px;
    background-color: #1111;
}
.search-container {
    max-width: 1000px;
    margin: auto;
    padding-right: 10px;
}
.search {
    border-radius: 5px;
    border: 1px solid #ccc;
    padding: 7px;
    width: 90px;
    -webkit-transition: all .5s ease;
    -moz-transition: all .5s ease;
    transition: all .5s ease;
    float: right;
}
.search:focus {
    width: 200px;
}
tab1{
	padding-left:2em;
	}
	
#left 
{
    background: none repeat scroll 0 0 #99a3a4 ;
    float: left;
    margin: 0 ;
	padding:0;
	border:none;
    width: 100%;
}
#center
{
    background: none repeat scroll 0 0 #99a3a4 ;
    text-align:center;
    

    width:100%;
    justify-content: center;
	display: flex;
}
.one1 {
    border-style: solid;
    border-color: #800000;
	
}
.one {
    border-style: solid;
    border-color: #800000;
	
	background-color:#a93226;
	
}

.two{
	box-shadow: 10px 10px 5px #454545;
}
.img-circle {
    border-radius: 50%;
	padding:10px;
	justify-content: center

}
.container1{
	border-radius: 47px 47px 47px 47px;
-moz-border-radius: 47px 47px 47px 47px;
-webkit-border-radius: 47px 47px 47px 47px;
border: 0px solid #000000;
background-color:#bdc3c7 ;
width:500px;
margin:auto;
}
.c{
	background-color:#090659;
}

</style>
<body>
<body bgcolor="#E6E6FA">
<div class="wrapper col0">
  <div id="topbar">
    
    
    <br class="clear" />
	<div id="slidepanel">
      <div class="topbox">
        <h2>LOG IN </h2>
        <p>Christ University Library</p>
		<p>Use the login form to login as student or staff</p>
      </div>
  


     <!--- Shiju no need of login here --> 



    
      <div class="topbox last">
        <h2>Login to your account:</h2>
        <form action="#" method="post">
          <fieldset>
            <legend>Login Form</legend>
            <label for="name">Username:
              <input type="text" name="name" id="name" value="" />
            </label>
            <label for="password">Password:
              <input type="password" name="pupilpass" id="pupilpass" value="" />
            </label>
            <label for="remember">
              <input class="checkbox" type="checkbox" name="remember" id="remember" checked="checked" />
              Remember me</label>
            <p>
              <input type="submit" name="login" id="login" value="Login" />
              &nbsp;
              <input type="reset" name="reset" id="reset" value="Reset" />
            </p>
          </fieldset>
        </form>
      </div>
      <br class="clear" />
	  
    </div>
  </div>
  
</div><div id="loginpanel">
	
      <ul>
        <li class="left">Log In Here&raquo;</li>
        <li class="right" id="toggle"><a href="login.php"><font color="white">Click Here</font></a><a style="display: none;" href="#slidepanel"><font color="red">Close Panel</font></a></li>
      </ul>
    </div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="ChristUniversity_library.php"><img src="images/logo.png"width="200" height="70" ></a></h1>
      <font color="white"><p><tab1>EXCELLENCE AND SERVICE</tab1></p></font>
    </div>
	<br></br>
    <div class="fl_right">
      <ul>
		<div class="top-bar">
		<div class="search-container">
			<input class="search" type="search" placeholder="&#128270;Search....">
		</div>
		</div>
        
      </ul>
     
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topnav">
  
    <ul>
      <li><a style="color:#FFFFFF;" href="ChristUniversity_library.php">Home</a>
      </li>
      <li class="dropdown"><a style="color:#FFFFFF;" href="PL.php">Physical Library</a>
        
	   </li>
      <li><a style="color:#FFFFFF;" href="OL.php">Online Library</a>
        
      </li>
      <li><a style="color:#FFFFFF;" href="OAM.php">Open Access Material</a>
	  
	  </li>
     
	  <li><a style="color:#FFFFFF;" href="Rep.php">Repository</a>
       
	  <li><a style="color:#FFFFFF;" href="RRM.php">Research/Reference Manager</a>
        
      </li>
	  <li><a style="color:#FFFFFF;" href="Physl.php">Physical Links</a>
      </li>
	  <li><a style="color:#FFFFFF;" href="AU.php">About Us</a>
        
      </li>
    </ul>
	
  </div></font>
</div>
<!-- ####################################################################################################### -->

<center><h1>
<?php 
  $username = $_POST['emailid'];
  echo "Welcome".$username;
  //echo "Login Success!! Welcome".$row['admin_id'];
 ?>
</h1></center>

	<div class="container1">
		<br></br><br></br>
		<center>
		<a href="admin/add admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD ADMIN</a><br></br>
		<a href="admin/remove admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE ADMIN</a><br></br>
		<a href="admin/edit admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT ADMIN</a><br></br>
		<a href="admin/add student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD STUDENT</a><br></br>
		<a href="admin/remove student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE STUDENT</a><br></br>
		<a href="admin/edit student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT STUDENT</a><br></br>
		<a href="admin/add staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/add staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">ADD STAFF</a><br></br>
		<a href="admin/remove staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/remove staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">REMOVE STAFF</a><br></br>
		<a href="admin/edit staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/edit staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">EDIT STAFF</a><br></br>
		<a href="admin/display all admin.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all admin.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL ADMINS</a><br></br>
		<a href="admin/display all student.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all student.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL STUDENTS</a><br></br>
		<a href="admin/display all staff.php" target="_blank" style="color:black" onclick="javascript:void window.open('\admin/display all staff.php','1441796471377','width=480,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;">DISPLAY ALL STAFF</a><br></br>
		<br></br>
		<br></br>
		<br></br></center>
	</div>
	</br></br></br></br></br></br>
<div class ="c">
<br></br>
</div>
</body>
</html>