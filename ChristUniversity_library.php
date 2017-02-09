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
body {
	background-color:#EEEEEE;
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
	padding-left:1.8em;
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
<!--image slider-->

#slideshow {
  margin: 50px auto;
  position: relative;
  width: 240px;
  height: 240px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  top: 140px;
  left: 0px;
  right: 0px;
  bottom: 10px;
}
<!-- table-->
table {
    max-width: 100%;
    background-color: transparent;
}
*, *::before, *::after {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
table {
    border-collapse: collapse;
    border-spacing: 0px;
}
{
    visibility: visible;
    -webkit-animation-duration: 1000ms;
    -moz-animation-duration: 1000ms;
    animation-duration: 1000ms;
    -webkit-animation-delay: 50ms;
    -moz-animation-delay: 50ms;
    animation-delay: 50ms;
}
tab2{
	padding-left:11em;
}


  tab3{
  padding-left:34em;
  }
  
  div.containerbackground {
  background: url(klematis.jpg) repeat;
  
  width:600px;
  align:center;
  
  
}

div.transbox {
  margin: 30px;
  background-color: #ffffff;
  border: 1px solid black;
  opacity: 0.9;
  filter: alpha(opacity=60); /* For IE8 and earlier */
  border-radius: 20px 20px 20px 20px;
-moz-border-radius: 20px 20px 20px 20px;
-webkit-border-radius: 20px 20px 20px 20px;
border: 0px solid #000000;
text-align:left;
}

div.transbox p {
  margin: 5%;
  font-weight: bold;
  color: #000000;
  
}

.searchtext {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  padding: 10px 150px 10px 20px;
  border: 1px solid #b7b7b7;
  font: normal 16px/normal "Times New Roman", Times, serif;
  color: rgba(0,142,198,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgba(252,252,252,1);
  -webkit-box-shadow: 0 0 2px 1px rgba(152,0,0,1) ;
  box-shadow: 0 0 2px 1px rgba(152,0,0,1) ;
  -webkit-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 200ms cubic-bezier(0.42, 0, 0.58, 1);
}
  .searchbutton {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 44px 10px 20px;
  border: 2px solid #018dc4;
  -webkit-border-radius: 3px;
  border-radius: 4px;
  font: italic normal normal 16px/normal "Times New Roman", Times, serif;
  color: rgba(255,255,255,0.9);
  text-indent: 24px;
  -o-text-overflow: clip;
  text-overflow: clip;
  letter-spacing: 2px;
  background: #980000;
  -webkit-box-shadow: 0 0 2px 1px rgba(152,0,0,1) ;
  box-shadow: 0 0 2px 1px rgba(152,0,0,1) ;
  text-shadow: -1px -1px 0 rgba(152,0,0,1) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}
.topcontainer
{
    width: auto;
    margin: 0 auto;
	position:fixed;
}
.maincontainer
{
    width: 800px;
    margin: 0 auto;
    background-color: #EEEEEE;
}
</style>
<body>
<body bgcolor="#EEEEEE">
	
<!-- ####################################################################################################### -->
<div class="topcontainer">
<div class="wrapper col1"style="position:fixed">
  <div id="header">
  <ul>
       <tab2></tab2><tab2></tab2><tab2></tab2><tab2></tab2><tab1></tab1><tab1></tab1><tab1></tab1><tab1></tab1><tab1></tab1>
	   <tab2></tab2><li class="left">Log In Here&raquo;</li>
        <li class="right" id="toggle"><a href="login.php"><font color="white">Click Here</font></a><a style="display: none;" href="#slidepanel"><font color="red">Close Panel</font></a></li>
      </ul>
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
</br></br></br></br></br></br></br>
<div class="wrapper col2"style="position:fixed">
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
	  
	  </li>
	  <li><a style="color:#FFFFFF;" href="AU.php">About Us</a>
      </li>
    </ul>
	
  </div></font>
</div>
</div>
<!-- ####################################################################################################### -->
<script>
$(document).ready(function(){ 

$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3500);

});
</script>
<div class="c1">

<div id="slideshow">
   <div>
     <img src="images/1.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/2.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/3.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/5.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/6.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/7.jpg"width=100% height="750px">
   </div>
   <div>
     <img src="images/8.jpg"width=100% height="750px">
   </div>
</div>
</div>

	<!--############################################################################################-->
	</br></br></br></br></br></br></br></br></br></br></br></br></b></br></br></b></br></br></b></br></br></b></br></br></b></br></br></b></br></br></b></br></br>
		<center><div class="containerbackground">
		  <div class="transbox">
		  </br>
			</br>
			<tab1></tab1><font size="3">Search for books, articles, media and more</br></br></font>
			
      <form action="search.php" method="post">
      <tab1></tab1><input class="searchtext" type="text" name="svalue" ><input class="searchbutton" type="submit" value="Search">
			</br></br><tab1></tab1><a style="color:black" href="advancesearch.php"><font size="2.5"><u>Advance Search</u></font></a>
			</form>
			</br></br>
		  </div>
		</div></center>
	
	</br></br></br></br></br></br></br></br></br>
	</br></br></br></br></br></br></br></br></br></br></br>
	

<div id="wrapper">
            <div id="center">
			<h3><b><p></br>Follow Us On:</p></b></h3><br><br>
  				<a href="https://twitter.com/christbangalore" target="_blank"><img style= "float:left; display:inline" class="img-circle" src="images/twitter.png"width="75" height="75"></a>
				<a href="https://web.facebook.com/Christ.University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/facebook.png"width="75" height="75"></a>
				<a href="https://web.facebook.com/Christ.University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/youtube.png"width="75" height="75"></a>
				<a href="http://christbangalore.blogspot.in/" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/blogger.png"width="75" height="75"></a>
				<a href="https://play.google.com/store/apps/developer?id=Christ+University" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/android.png"width="75" height="75" ></a>
				<a href="http://www.flickr.com/photos/christuniversity" target="_blank"><img style= "float:left; display:inline"class="img-circle" src="images/flicker.png" width="75" height="75"></a>
				
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
</body>
</html>