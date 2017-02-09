<html>
<body>
<center>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<input type="text" placeholder="ISBN_NO" name="isbn" required ></br></br>
<input type="text" placeholder="BOOK_TITLE" name="btitle" required></br></br>
<!--<input type="text" placeholder="BOOK_CATG" name="bcatg" required></br></br>-->
NO OF COPIES: 
<input type="number" placeholder="NOOF_COPIES" name="nocop" min="0" max="100" required></br></br>
<input type="text" placeholder="AUTHOR_NAME" name="authn" required></br></br>
EDITION: 
<input type="number" placeholder="EDITION(Optional)" name="edition" min="0" max="100" value="1"></br></br>
PUBL YEAR: 
<input type="number" placeholder="PUBL_YEAR(Optional)" name="publyear" min="1700" max="2018" value="2017"></br></br>
<input type="text" placeholder="PUBL_ID" name="pid" required></br></br>
<input type="text" placeholder="PREVIEW_PDF(Optional)" name="pdf"></br></br>
<!--<input type="text" placeholder="COVER_PICTURE(Optional)" name="covpic"></br></br>-->
COVER_PICTURE : 
<input type="file" name="covpic" accept="image/*"></br></br>
COPYRIGHT_DATE : 
<input type="date" placeholder="COPYRIGHT_DATE(Optional)" name="copdate"></br></br>
PAGES(Optional): 
<input type="number" placeholder="PAGES(Optional)" name="pag" min="0" max="10000" value="0"></br></br>
<input type="text" placeholder="LANG" name="lang" required></br></br>
<input type="text" placeholder="TAGS(Optional)" name="tag"></br></br>
<!--<input type="text" placeholder="FORMAT" name="format" required>-->
FORMAT : 
<select name="format">
    <option value="Regular print">Regular print</option>
    <option value="Large print">Large print</option>
    <option value="Braille">Braille</option>
  </select></br></br>

<!--<input type="text" placeholder="CONTENT" name="cont" required></br></br>-->

CONTENT : 
<select name="cont">
    <option value="Fiction">Fiction</option>
    <option value="Non fiction">Non fiction</option>
    <option value="Reference">Reference</option>
    <option value="Biography">Biography</option>
    <option value="Summaries">Summaries</option>
    <option value="Bibliographies">Bibliographies</option>
    <option value="Catalogs">Catalogs</option>
    <option value="Dictionaries">Dictionaries</option>
    <option value="Encyclopedias ">Encyclopedias </option>
    <option value="Handbooks">Handbooks</option>
    <option value="Legal articles">Legal articles</option>
    <option value="Indexes">Indexes</option>
    <option value="Patent document">Patent document</option>
    <option value="Legislation">Legislation</option>
    <option value="Theses">Theses</option>
    <option value="Surveys">Surveys</option>
    <option value="Reviews">Reviews</option>
    <option value="Programmed texts">Programmed texts</option>
    <option value="Filmographies">Filmographies</option>
    <option value="Directories">Directories</option>
    <option value="Statistics">Statistics</option>
    <option value="Technical reports">Technical reports</option>
    <option value="Legal cases">Legal cases</option>
    <option value="Case notes">Case notes</option>
    <option value="Law reports">Law reports</option>
    <option value="Law digests">Law digests</option>
    <option value="Treaties">Treaties</option>
  </select></br></br>
<input type="submit"  value="ADD"></br>

</form>
</center>

<center><p>
       <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            	$isbn = $_POST['isbn'];
            	$btitle = $_POST['btitle'];
            	$nocop = $_POST['nocop'];
            	$authn = $_POST['authn'];
            	$edition = $_POST['edition'];
            	$publyear = $_POST['publyear'];
            	$pid = $_POST['pid'];
            	$pdf = $_POST['pdf'];
            	$covpic = $_POST['covpic'];
            	$copdate = $_POST['copdate'];
            	$pag = $_POST['pag'];
            	$lang = $_POST['lang'];
            	$tag = $_POST['tag'];
            	$format = $_POST['format'];
            	$cont = $_POST['cont'];

                include 'dbh.php';

                $sql="INSERT INTO book VALUES ('$isbn','$btitle','$nocop','$authn','$edition','$publyear','$pid','$pdf','$covpic','$copdate','$pag','$lang','$tag','$format','$cont')";

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
