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
	<title>Report list-MY FAMILY BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style6 {font-size: 36px; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #999999; }
.style1 {	color: #333333;
	font-weight: bold;
	font-style: italic;
}
-->
    </style>
</head>
<body>
	<div id="header">
	  <div class="clearfix">
			<div class="logo">
				<a href="welcome.html"></a>			</div>
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
                <h1 class="style1">&nbsp;</h1>
              </div>
              <span class="style6">MY FAMILY BOOK </span>
              <p align='right'> <font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font> 
			  <img src="<?php echo $fnm; ?>" width="100" height="100" align="right"> </p>
            </div>
	  </div>
	</div>
	<div id="contents">
	  <div id="adbox"></div>
		<div class="highlight">
		  <div class="clearfix"></div>
		</div>
	  <div class="featured">
	   <?php
//session_start();
include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	$qry="select * from tbl_chat where chat_toname='". $_SESSION["usernm"]."'";
	$result=mysql_query($qry);
	
	echo "<h1 align='center'>Inbox</h1>";
	echo "<table align='center' border=1>";
	echo "<tr>";
		echo "<th>ID</th>";
		echo "<th>date</th>";
		echo "<th>from name</th>";
		echo "<th>mgs</th>";
		
	echo "</tr>";
	while($row=mysql_fetch_row($result))
	{
		echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[4]."</td>";
			echo"</tr>";
	}
		echo "</table>";
		
		
		
		
	

?>
	  </div>
	</div>
	<div id="footer">
	  <div class="clearfix"></div>
		<div id="footnote">
			<div class="clearfix">
			  <div align="center"><a href="chat.php" class="subscribe  style8">Click To Back</a>
		      </div>
			  <div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
			  </div>
				<p>.				</p>
		  </div>
		</div>
	</div>
</body>
</html>