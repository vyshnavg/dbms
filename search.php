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
tr,td{
    text-align: center;
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
        <li class="left">Log Out&raquo;</li>
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
<center><div class="containerbackground">
      <div class="transbox">
      </br>
      </br>
      
      

      <form action="search.php" method="post">
      <tab1></tab1>
      <input class="searchtext" type="text" name="svalue">
      <input class="searchbutton" type="submit" value="Search">
      </br></br><tab1></tab1><a style="color:black" href="advancesearch.php"><font size="2.5"><u>Advance Search</u></font></a>
      </form>


      </br></br>
      </div>
    </div></center>
<center>
<?php
        
        $svalue = $_POST['svalue'];

        include 'dbh.php';

        $sql="SELECT * from book where  book_title LIKE '%$svalue%' OR isbn_no LIKE '%$svalue%' OR author_name LIKE '%$svalue%'" ;
        
        $result= mysqli_query($conn ,$sql)or die(mysqli_error($conn));
        $count=mysqli_num_rows($result);



        if($count==0 || $svalue==NULL){
          echo "No Search Results";
        }
        else{
            //echo "pass";
            
            //$count2=mysqli_num_rows($result);

            echo "<table border='1'><tr><th>Book Title</th><th>ISBN</th><th>No of Copies</th><th>Author</th><th>Edition</th><th>Publish Year</th><th>Publisher ID</th><th>Preview</th><th>Cover</th><th>Copyright Date</th><th>Pages</th><th>Language</th><th>Tags</th><th>Format</th><th>Content</th></tr>";
            while($row=mysqli_fetch_array($result)){
                
                $publish_id=$row['publ_id'];
                $sql2="SELECT publ_name from publisher where publ_id=$publish_id";
                $result2= mysqli_query($conn ,$sql2)or die(mysqli_error($conn));
                
                $row2=mysqli_fetch_array($result2);
                $photo=$row['cover_picture'];
                echo "<tr>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <col width='100'><col width='100'>
                <td>".$row['book_title']."</td>
                <td>".$row['isbn_no']."</td>
                <td>".$row['noof_copies']."</td>
                <td>".$row['author_name']."</td>
                <td>".$row['edition']."</td>
                <td>".$row['publ_year']."</td>
                <td>".$row2['publ_name']."</td>
                <td>".$row['preview_pdf']."</td>
                <td> <img src='images/$photo' alt='some text' height='200' width='150'> </td>
                <td>".$row['copyright_date']."</td>
                <td>".$row['pages']."</td>
                <td>".$row['lang']."</td>
                <td>".$row['tags']."</td>
                <td>".$row['format']."</td>
                <td>".$row['content']."</td>
                </tr>";
            }
        }
        ?></center>

</body>
</html>

