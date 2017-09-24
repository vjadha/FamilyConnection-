<?php

mysql_select_db("dbfamilyconn");
	session_start();
		include_once("sessionHandler.php");
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
	<title>Report list- MY FAMILY BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style6 {font-size: 36px; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #999999; }
.style7 {	color: #333333;
	font-weight: bold;
	font-style: italic;
}
.style9 {font-family: "Times New Roman", Times, serif}
-->
    </style>
</head>
<body>
<div id="header">
  <div class="clearfix">
    <div id="div">
      <div class="clearfix">
        <div class="logo"> </div>
        <ul class="navigation">
          <li class="active"> <a href="welcome.php">Home</a> </li>
          <li> <a href="about.php">About</a> </li>
          <li> <a href="event.php">Event</a> </li>
          <li> <a href="news.php">News</a> </li>
          <li> <a href="contactbook.php">Contact</a> </li>
          <li> <a href="chat.php">Chat</a> </li>
        </ul>
        <h1 class="style7">&nbsp;</h1>
      </div>
      <span class="style6">MY FAMILY BOOK </span>
      <p align='right'> <font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font>
	   <img src="<?php echo $fnm; ?>" width="100" height="100" align="right"> </p>
    </div>
  </div>
  <blockquote>
    <p>&nbsp;</p>
  </blockquote>
 	 </div>
	<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="images/family-large.jpg" alt="Img" height="382" width="594">
			  <div class="detail">
			  <li>
			<a href="rptadmin.php">Admin List</a>
				</li>	
			<li><a href="rptcontactno.php">Contact List</a>
				</li>			  
				
			  	<li>	<a href="rptevent.php">Event List</a>
				</li>						  
			  
			 <li> <a href="rptnews.php">News List</a>
				</li>	
				<li> <a href="rptfamilymem.php">Family Member List</a>
				</li>							
			  
			  <li> <a href="rptchat.php">Chating</a>
				</li>						
			  </div>
			</div>
		</div>
		<div class="highlight">
		  <div class="clearfix"></div>
		</div>
	  <div class="featured"></div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>&nbsp;</h4>
				<h4>&nbsp;</h4>
				<h4>Latest News</h4>
				<p> This website  has been designed by private Website for you, for free. You can use to send SMS , shering Photo and etc.</p>
			</div>
		 <div class="section contact">
				<h4>&nbsp;</h4>
	          <h1 align="center" class="style9"><a href="dblogout.php" class="style13 subscribe"><strong>Logout</strong></a></h1>
		  </div>
		  <div class="section contact">
		    <h4>&nbsp;</h4>
		    <h4>&nbsp;</h4>
		    <h4>Contact Us</h4>
		    <p> <span>Address:</span>D.Y.PATIL POL.TAL </p>
		    <p> <span>Phone:</span> (+91)95 7930 4746 </p>
		    <p> <span>Email:</span> FAMCONNDYP@GMAIL.com </p>
	      
	  </div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>.				</p>
			</div>
		</div>
	</div>
</body>
</html>