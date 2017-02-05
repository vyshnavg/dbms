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
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  }
  @-webkit-keyframes rubberBand {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  30% {
  -webkit-transform: scale3d(1.25, 0.75, 1);
  transform: scale3d(1.25, 0.75, 1);
  }
  40% {
  -webkit-transform: scale3d(0.75, 1.25, 1);
  transform: scale3d(0.75, 1.25, 1);
  }
  50% {
  -webkit-transform: scale3d(1.15, 0.85, 1);
  transform: scale3d(1.15, 0.85, 1);
  }
  65% {
  -webkit-transform: scale3d(.95, 1.05, 1);
  transform: scale3d(.95, 1.05, 1);
  }
  75% {
  -webkit-transform: scale3d(1.05, .95, 1);
  transform: scale3d(1.05, .95, 1);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  }
  @keyframes rubberBand {
  0% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  30% {
  -webkit-transform: scale3d(1.25, 0.75, 1);
  transform: scale3d(1.25, 0.75, 1);
  }
  40% {
  -webkit-transform: scale3d(0.75, 1.25, 1);
  transform: scale3d(0.75, 1.25, 1);
  }
  50% {
  -webkit-transform: scale3d(1.15, 0.85, 1);
  transform: scale3d(1.15, 0.85, 1);
  }
  65% {
  -webkit-transform: scale3d(.95, 1.05, 1);
  transform: scale3d(.95, 1.05, 1);
  }
  75% {
  -webkit-transform: scale3d(1.05, .95, 1);
  transform: scale3d(1.05, .95, 1);
  }
  100% {
  -webkit-transform: scale3d(1, 1, 1);
  transform: scale3d(1, 1, 1);
  }
  } 

.btn {
  background: #19288a;
  background-image: -webkit-linear-gradient(top, #19288a, #211b52);
  background-image: -moz-linear-gradient(top, #19288a, #211b52);
  background-image: -ms-linear-gradient(top, #19288a, #211b52);
  background-image: -o-linear-gradient(top, #19288a, #211b52);
  background-image: linear-gradient(to bottom, #19288a, #211b52);
  -webkit-border-radius: 60;
  -moz-border-radius: 60;
  border-radius: 60px;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 9px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  text-decoration: none;
}


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
	<form action="http://www.google.com/search" method="get" onSubmit="Gsitesearch(this)">
    <div class="fl_right">
      <ul>
		<div class="top-bar">
		<div class="search-container">
		
			<input class="search" type="search" placeholder="&#128270;Search....">
		</div>
		</div>
        
      </ul>
     
    </div>
	</form>
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
    </ul>
	
  </div></font>
</div>
<!-- ####################################################################################################### -->
</br></br></br></br></br></br></br></br></br>
   <div class="rubberBand">
   <center>
	  <a href="http://christuniversitylibrary.summon.serialssolutions.com/#!/"><button class="btn">Summons</button>
	  <a href="http://christuniversitylibrary.wordpress.com/"><button class="btn">Library Blog</button>
	  <a href="http://journals.christuniversity.in/"><button class="btn">Open Journal System</button>
	  <a href="http://christuniversitylibrary.wordpress.com/rules-regulations/"><button class="btn">Rules and Regulations</button>
	  </center>
	  </div>
	  <br></br></br></br></br></br></br></br></br></br></br></br>
	 
 <!-- ####################################################################################################### -->       
<div id="wrapper">
            <div id="center">
			<h3><b><p>Follow Us On:</p></b></h3><br><br>
  				<a href="https://twitter.com/christbangalore" target="_blank"><img style= "float:left; display:inline" class="img-circle" src="images/twitter.png"width="50" height="50"></a>
				<a href="https://web.facebook.com/Christ.University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/facebook.png"width="50" height="50"></a>
				<a href="https://web.facebook.com/Christ.University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/youtube.png"width="50" height="50"></a>
				<a href="http://christbangalore.blogspot.in/" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/blogger.png"width="50" height="50"></a>
				<a href="https://play.google.com/store/apps/developer?id=Christ+University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/android.png"width="50" height="50" ></a>
				<a href="http://www.flickr.com/photos/christuniversity" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/flicker.png" width="50" height="50"></a>
				
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