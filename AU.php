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

<!-- ####################################################################################################### -->

      
	  
	  </br></br></br></br></br>
	<div class="maincontainer">
	<div class="fadeIn"><h1><u> Library</u></h1></div>
	<div class="fadeIn">Library is the soul of any institution. It is a center of acquiring, processin and disseminating information to the
	user community with the motto of empowering knowledge.</br>Christ University library has well trained
	staff and an automated library system to enrich the user community with a wide range of academic
	resources such as books,</br>periodicals, databases, back volumes, CDs/DVDs, project reports, audio
	/video cassettes and question bank.
	</br>
	</br>
	<center><b>Library :</b>
	<table style="border-collapse:collapse;border:none;width:800px;" border="1" cellspacing="0" cellpadding="0">
	<tbody>
		<tr style="height:14.25pt">
			<td width="295" valign="top" style="width:221.4pt;border:solid black 1.0pt;border-bottom:solid windowtext 1.0pt;&#10;            background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.25pt">
			<div style="margin-right: -1.5pt;"><font color="#000000"><b><b><span style="Bitstream Charter" times="" new="" bitstream="">Library</span></b><b><span style="Bitstream Charter" times="" new="" bitstream="">Timings</span></b></b></font></div>
			</td>
			<td width="295" valign="top" style="width:221.4pt;border-top:solid black 1.0pt;border-left:none;border-bottom:solid windowtext 1.0pt;&#10;            border-right:solid black 1.0pt;&#10;            background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:14.25pt" colspan="2">
			<div style="margin-right: -1.5pt;"><strong><span style="color:#000000;"><span style="font-size: 13px;">Library Facility &amp; Services</span></span></strong></div>
			</td>
		</tr>
		<tr style="height:92.25pt">
			<td width="295" valign="top" style="width:221.4pt;border:solid black 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;height:92.25pt">
			<div style="margin-right: -1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></b></font></div>

			<div style="margin-right: -1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></b></font></div>

			<div style="margin-right: -1.5pt;">&nbsp;</div>

			<div style="margin-right: -1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </span></b></font></div>

			<div style="margin-right: -1.5pt;">&nbsp;</div>

			<div style="margin-right: -1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Monday</span><span style="Bitstream Charter" times="" new="" bitstream="">-</span><span style="Bitstream Charter" times="" new="" bitstream="">Saturday</span></b></font></div>

			<div style="margin-right: -1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reference:</span><span style="Bitstream Charter" times="" new="" bitstream="">8.00</span><span style="Bitstream Charter" times="" new="" bitstream="">am</span><span style="Bitstream Charter" times="" new="" bitstream="" span="" font="" div="" color="#000000">&nbsp; </span></b></font></div>

			<div style="margin-right: -1.5pt;"><b style="color: rgb(0, 0, 0); font-size: 13px;"><span times="" new="" bitstream="" span="" font="" div="" color="#000000">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Circulation:</span><span times="" new="" bitstream="">8.30</span><span times="" new="" bitstream="">am&nbsp;</span></b><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="" span="" font="" div="" color="#000000">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></b></font></div>

			<div style="margin-right: -1.5pt;"><font color="#000000"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</b></font><b style="color: rgb(0, 0, 0); font-size: 13px;"><span times="" new="" bitstream="" span="" font="" div="" color="#000000">Sunday and Public Holidays: H</span><span times="" new="" bitstream="">oliday</span></b></div>

			<div style="margin-right:-1.5pt;"><font color="#000000"><b><b>&nbsp;</b></b></font></div>
			</td>
			<td width="295" valign="top" style="width:221.4pt;border-top:none;&#10;            border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;padding:0in 5.4pt 0in 5.4pt;&#10;            height:92.25pt" colspan="2">
			<p>&nbsp;</p>

			<ul style="font-size: 13px;">
				<li><strong>Circulation</strong></li>
				<li><strong>Reference</strong></li>
				<li><strong>Open Access</strong></li>
				<li><strong>Internet &amp; Wi fi Facility</strong></li>
				<li><strong>SMS &amp; Email facility for all Library Transaction</strong></li>
				<li><strong>Reprography</strong></li>
				<li><strong>Plagiarism/Similarity Check Service (Turnitin)</strong></li>
				<li><strong>Locker Facility</strong></li>
				<li><strong>Discussion Rooms</strong></li>
				<li><strong>Current Affairs</strong></li>
				<li><strong>Journal Archive</strong></li>
				<li><strong>Laptop charging point</strong></li>
			</ul>
			</font>
			<p style="font-size: 13px; margin-right: -1.5pt;"><font color="#000000"><b>&nbsp; &nbsp;</b></font></p>

			<p style="margin-right:-1.5pt;"><font color="#000000"><b><span style="Bitstream Charter" times="" new="" bitstream="">&nbsp; &nbsp; &nbsp;</span></b></font></p>
			</td>
		</tr>
		<tr style="height:15.75pt">
			<td width="590" valign="top" style="width:6.15in;border-top:none;&#10;            border-left:solid black 1.0pt;border-bottom:&#10;            solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#D9D9D9;padding:0in 5.4pt 0in 5.4pt;height:15.75pt" colspan="3">
			<div align="center" style="margin-right:-1.5pt;text-align:center"><font color="#000000"><b><b>Library Collection</b></b></font></div>
			</td>
		</tr>
		<tr style="height:39.0pt">
			<td width="590" valign="top" style="width:6.15in;border:solid black 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;height:39.0pt" colspan="3">
			<p><font color="#000000"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Books &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,35,108&nbsp;&nbsp;</b></font></p>

			<p><font color="#000000"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Titles&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,44,629</b></font></p>

			<p><font color="#000000"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Periodicals&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; 621</b></font></p>

			<div><font color="#000000"><b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Newspaper&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 30</b></font></div>

			<div>&nbsp;</div>
			</td>
		</tr>
		<tr style="height:10.5pt">
			<td width="590" valign="top" style="width:6.15in;border-top:none;&#10;            border-left:solid black 1.0pt;border-bottom:&#10;            solid windowtext 1.0pt;border-right:solid black 1.0pt;background:#D9D9D9;&#10;            padding:0in 5.4pt 0in 5.4pt;height:10.5pt" colspan="3">
			<p align="center" style="text-align:center"><font color="#000000"><b><b>Institutional Membership</b></b></font></p>
			</td>
		</tr>
		<tr style="height:57.75pt">
			<td width="590" valign="top" style="width:6.15in;border:solid black 1.0pt;border-top:none;padding:0in 5.4pt 0in 5.4pt;height:57.75pt" colspan="3">
			<p style="margin-left:.5in;&#10;            text-indent:-.25in;"><font color="#000000"><b><span>1.<span style="font:7.0pt " times="" new="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Indian Institute of Management, Bengaluru</b></font></p>

			<p style="margin-left:.5in;&#10;            text-indent:-.25in;"><font color="#000000"><b><span>2.<span style="font:7.0pt " times="" new="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>British Council Library</b></font></p>

			<p style="margin-left:.5in;&#10;            text-indent:-.25in;"><font color="#000000"><b><span>3.<span style="font:7.0pt " times="" new="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>Institute for Social and Economic Change (ISEC) Library</b></font></p>

			<p style="margin-left:.5in;&#10;            text-indent:-.25in;"><font color="#000000"><b><span>4.<span style="font:7.0pt " times="" new="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>DELNET, Delhi</b></font></p>
			</td>
		</tr>
		<tr height="0">
			<td width="295" style="border:none">
			<p>&nbsp;</p>

			<p>&nbsp;</p>
			</td>
			<td width="9" style="border:none">&nbsp;</td>
			<td width="286" style="border:none">&nbsp;</td>
		</tr>
	</tbody><font size="2" color="black">
</table></center>
			<b>Internet</b>
			</br>
			The library has 250 terminals with high-end computers for high speed internet access. Students can browse access learing</br>
			Management System, download journal articles, etc,. on these systems. A seperate provision have been given for laptop users.</br></br>
			<b>Students are hearby advised to use the internet library for learning purpose rather than for sending mail etc,. Chatting</br>
			
			(both oral and mail) is strictly prohibited.</br></b>
			
			<p> <strong>GENERAL INSTRUCTION</strong><br>
			<br>
			1. Identity Card is a must for library transaction.<br>
			2. Faculty can borrow twenty books, UG Students can borrow two books, PG students can borrow four books and </br><tab3></tab3>Research Scholars can borrow six books from any of the above libraries.<br>
			3. Renewals are allowed only once, when there are no claim by others.<br>
			4. Borrowed books should be returned on the due date failing by which a fine of Rs.5/per day would be charged.<br>
			5. Loss of borrowed books have to be reported immediately in writing to the Librarian.<br>
			6. Reference Books, periodicals &amp; project reports will not be lent out.<br>
			7. Books should be handled with great care. Mutilation of books in any manner will be fined.<br>
			8. A borrowed book, if recalled by the librarian has to be returned immediately.<br>
			<br>
			<br>
			<br>
			<b>EXPECTATION FROM USERS:</b><br>
			<br>
			1. SILENCE should be maintained in the library.<br>
			2. Leave your bags, handbags and personal belongings at the property counters.<br>
			3. Avoid using mobile phones inside the library.<br>
			4. Maintain discipline in the library.<br>
			5. Maintain a queue at circulation counter.<br>
			6. Carry ID Cards at all times &amp; produce them on demand.<br>
			7. Look frequently at the Library Notice Board.<br>
			8. Keep the library clean. Use dustbins provided in the library.<br>
			<br>
			<br>
			<b>Contact Details :</b><br>
			<br>
			Knowledge Centre : 080 4012 -9660 / 9661 / 9662 / 9663 / 9445<br>
			UG Library : 080 4012 - 9114 / 9115</p>
</div>
	</font>
	</div>
		</br></br></br>
		
        
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