<!DOCTYPE html>
<head>
<title>CHRIST UNIVERSITY_LIBRARY</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.tabs.setup.js"></script>
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

</style>
<body>
<body bgcolor="#E6E6FA">
<div class="wrapper col0">
  <div id="topbar">
    
    <div id="loginpanel">
	
      <ul>
        <li class="left">Log In Here&raquo;</li>
        <li class="right" id="toggle"><a id="slideit" href="#slidepanel">Click Here</a><a id="closeit" style="display: none;" href="#slidepanel">Close Panel</a></li>
      </ul>
    </div>
    <br class="clear" />
	<div id="slidepanel">
      <div class="topbox">
        <h2>LOG IN </h2>
        <p>Christ University Library</p>
		<p>Use the login form to login as student or staff</p>
      </div>
      
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
       
      </li>
	  <li><a style="color:#FFFFFF;" href="IM.php">Institutional Membership</a>
        
      </li>
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
<div class="wrapper col3">
  <div id="featured_slide">
    <div id="featured_wrap">
      <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
      <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
	  <br></br>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="wrapper">
            <div id="left">
                <h3><b><center>Visit Us On</center><b></h3>
				<br></br>
				
            </div>
            <div id="content"></div>   
    <div style="clear:both;"></div>
</div

<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In Touch !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    
    <div class="footbox">
      <h2>Mission</h2>
      <ul>
        <p>"Christ University is a nurturing ground for an</p>
		<p>individual's holistic development to make</p>
		<p>effective contribution to the society in a</p>
		<p>dynamic environment."</p>
    </div>
	
    <div class="footbox1">
	<h2>CHRIST UNIVERSITY</h2>
      <ul>
		<p>Hosur Road, Bengaluru - 560029,</p>
		<p>karantaka, INDIA</p>
		<br></br>
		<p>Tel: +91 80 4012 9100 / 9600</p>
		<p>Fax: +91 80 4012 9000</p>
		<p>Email: mail@christuniversity.in</p>
		<p>Web: http://www.christuniversity.in</p>
		
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="copyright">
    <font color="grey"><p class="fl_left">Copyright &copy; 2017 - All Rights Reserved </p>
    <p class="fl_right">ChristUniversity_library </p></font>
	
    <br class="clear" />
  </div>
</div>
</body>
</html>