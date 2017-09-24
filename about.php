<?php
mysql_select_db("dbfamilyconn");
	session_start();
	include_once("dbconfig.php");
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);

	if(!isset($_SESSION["usertype"]))
	{
				echo "<script language='javascript'>alert('login first');</script>";
			header('refresh:0;url=login.html');

	}

	$usertype=$_SESSION["usertype"];
	$username=$_SESSION["usernm"];
	if($usertype=="admin")
	{
		$qry="Select adm_image From tbl_admin where adm_id=".$_SESSION["id"];
		$res=mysql_query($qry);
		$row=mysql_fetch_row($res);
		$fnm="adminimgs/".$row[0];
		//echo "".$fnm;
	
	}
	else if($usertype=="fm")
	{
		$qry="Select fm_image From tbl_familymem where fm_id=".$_SESSION["id"];
		$res=mysql_query($qry);
		$row=mysql_fetch_row($res);
		$fnm="familyimgs/".$row[0];
		//echo "".$fnm;
	
	}
	


?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>About - MY FAMILY BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style7 {	color: #333333;
	font-weight: bold;
	font-style: italic;
}
.style8 {font-size: 36px; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #999999; }
.style13 {font-family: "Times New Roman", Times, serif; color: #999999; font-size: 12px;}
.style14 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
}
.style16 {font-family: "Times New Roman", Times, serif; font-size: 18; }
.style17 {font-size: 18}
.style20 {
	font-family: "Times New Roman", Times, serif;
	font-size: 14px;
	font-style: italic;
	font-weight: bold;
}
.style21 {
	font-weight: bold;
	font-style: italic;
}
.style23 {color: #FFFFFF}
-->
    </style>
</head>
<body>
<div id="header">
  <div class="clearfix">
    <div class="logo"> </div>
    <ul class="navigation">
      <li >
	   <a href="welcome.php">Home</a> </li>
      <li class="active"> <a href="about.php">About</a> </li>
      <li> <a href="event.php">Event</a> </li>
      <li> <a href="news.php">News</a> </li>
      <li> <a href="contactbook.php">Contact</a> </li>
      <li> <a href="chat.php">Chat</a> </li>
    </ul>
    <h1 class="style7">&nbsp;</h1>
  </div>
  <span class="style8">MY FAMILY BOOK </span>
  <p align='right'> <font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font> 
  <img src="<?php echo $fnm; ?>" width="100" height="100" align="right"> </p>
</div>
<div id="contents">
		<div class="clearfix">
			<h1>About Us</h1>
			<div class="frame2">
				<div class="box">
					<img src="images/thumb-up.jpg" alt="Img" height="298" width="924">				</div>
			</div>
		    <h1><strong><em>Love the  family</em></strong><span class="style21"><br>
			</span></h1>
		    <h5><span class="style20"><br>
                <span class="style17">
			
			  <p> The role of love within marriage and the family is  another theme dealt with in the text. The family is a place where communion is  brought about, and thanks to love each person is recognized, accepted and  respected.  
              <br>
              Love, affirms the&nbsp;Compendium, is essential for human beings. But marital love  is more than just emotions or sexual expression. It is a full and total gift,  marked by unity and fidelity. Moreover, the nature of conjugal love requires  the marital union to be stable. The introduction of civil divorce &quot;has  fueled a relativistic vision of the marriage bond&quot; and can be termed &quot;a  plague on society<br>
              
             <p> For those couples who have divorced and remarried  the&nbsp;Compendium&nbsp;adds  that the Church does not abandon them. &quot;She prays for them and encourages  them in the difficulties that they encounter in the spiritual life, sustaining  them in faith and hope.&quot;  Nevertheless, they cannot receive the  Eucharist until they obtain reconciliation through the sacrament of penance.</p>
           <p>   <br>
              The text also rejects attempts to redefine  marriage through the introduction of new concepts that see gender as dependent  merely on social and cultural factors. &quot;Physical, moral and spiritual  difference and complementarities are oriented towards the goods of marriage and  the flourishing of family life.&quot; It is therefore incongruous to demand  that same-sex unions receive the status of marriage. At the same time the Compendium&nbsp;calls for homosexuals to be fully  respected in their human dignity, but also encouraged to exercise chastity.<br></p>
            <p>  
              The Compendiumis also critical of de facto unions  as they are based on a false conception of the freedom to choose. Marriage is  more than a simple agreement to live together but is a social instrument and  the principal means for helping each person to grow in an integral manner.
              </p>
                </span></span>	        </h5>
		    <p class="style16">&nbsp;</p>
			<h2 class="style14">&nbsp;</h2>
			<h2>&nbsp;</h2>
	  </div>
</div>
	
	  <div class="featured"></div>
	</div>
	
		<div id="footer">
		<div class="clearfix">
		  <p>&nbsp;</p>
	<div id="footer">
	  <div class="clearfix">
			<div class="section">
				<h4>&nbsp;</h4>
				<h4>Latest News</h4>
				<p> This website  has been designed by private Website for you, for free. You can use to send SMS , shering Photo and etc.</p>
			</div>
			<div class="section contact">
				<h4>&nbsp;</h4>
				<h4>Contact Us</h4>
				<p> <span>Address:</span>D.Y.PATIL POL.TAL </p>
				<p> <span>Phone:</span>9579304746</p>
				<p> <span>Email:</span>familyconndyp@gmail.com</p>
			</div>
	    <div class="section">
				<h4>&nbsp;</h4>
		   <h1 align="center"><a href="dblogout.php" class="subscribe  style13 style23">Logout</a></h1>
		</div>
	  </div>
	
	  </div>
	  
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</body>
</html>