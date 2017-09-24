<?php
	//mysql_connect("localhost","root","");
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
	<title> MY FAMILY BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style1 {
	color: #333333;
	font-weight: bold;
	font-style: italic;
}
.style6 {font-size: 36px; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #999999; }
.style7 {font-family: "Times New Roman", Times, serif}
-->
    </style>
</head>
<body>
<div id="header">
<div class="clearfix">
			<div class="logo">		  </div>
			<ul class="navigation">
				<li class="active">
					<a href="welcome.php">Home</a>				</li>
				<li>
					<a href="about.php">About</a>				</li>
				<li>
					<a href="event.php">Event</a>				</li>
				<li>
					<a href="news.php">News</a>				</li>
				<li>
					<a href="contactbook.php">Contact</a>				</li>
					
					<li>
					<a href="chat.php">Chat</a>				</li>
			</ul>
		    <h1 class="style1">&nbsp;</h1>
  </div>
	<span class="style6">MY FAMILY BOOK </span>
	<p align='right'>
		<font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font>
		<img src="<?php echo $fnm; ?>" width="100" height="100" align="right">	</p>
</div>
	
<div id="contents">
		<div id="adbox">
			<div class="clearfix">
				<img src="images/family-large.jpg" alt="Img" height="382" width="594">
				<div class="detail">
					<h1>It’s never easy...<br> When it comes to family.</h1>
					<p>
						But we can set<br> everything straight.
					</p>
				</div>
			</div>
		</div>
	  <div class="highlight"></div>
	  <div class="featured">
	    <table width="1179" height="88" border="0" align="center">
          <tr>
            <th width="1038" scope="col">
			
			<table width="1183" height="72" border="0">
              
                <tr>
                  <td>                  
                  <td height="33">
                <td width="234">&nbsp;</td>
              <tr>
                <td width="333"><?php
			echo "<br/>";
			echo "<img src>";
			echo "<br/>";			
			echo "<table width='100%' align='center'>";
				if($usertype=="admin")
				{
					echo "<tr>";
						echo "<td><a href='upadmin.php'> Update Profile</a></td>";
					echo "</tr>"; 
					echo "<tr>";
						echo "<td><a href='familymem.php'> Add Family Member</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td><a href='news.php'> Add News</a></td>";
						echo "<td><a href='upnews.php'> Update News</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td><a href='event.php'> Add Event</a></td>";
						echo "<td><a href='upevent.php'> Update Event</a></td>";
					echo "</tr>";
					
				
						echo "<tr>";
						echo "<td><a href='rptlogin.html'> Report list</a></td>";
						
					echo "</tr>";
					
					
					echo "<tr>";
						echo "<td><a href='chat.php'>chat</a></td>";
						
					echo "</tr>";

					
				}
				
				else if($usertype=="fm")
				{
					echo "<tr>";
						echo "<td><a href='upfamilymem.php'> Update Profile</a></td>";
					echo "</tr>";
					echo "<tr>";
						echo "<td><a href='news.php'> Add News</a></td>";
						echo "<td><a href='upnews.php'> Update News</a></td>";
					echo "</tr>";

					echo "<tr>";
						echo "<td><a href='event.php'> Add Event</a></td>";
						echo "<td><a href='upevent.php'> Update Event</a></td>";
					echo "</tr>";
				
				
					echo "<tr>";
						echo "<td><a href='rptlogin.html'> Report list</a></td>";
						
					echo "</tr>";				
					
					
				
				echo "<tr>";
						echo "<td><a href='chat.php'>chat</a></td>";
						
					echo "</tr>";

				}
			echo "</table>";
			?></td>
                <td width="333" height="33"><?php
						$msg="";
						$sql="select ne_title,ne_date, ne_des from tbl_news where ne_date>='".date('Y.m.d')."'";
						$res=mysql_query($sql);
						while($row=mysql_fetch_row($res))
						{
							$msg=$msg.$row[1]."-".$row[0]."-".$row[2]."<br><br>";
						
						}
						echo "<td rowspan=7><marquee scrollamount='2' direction='up'>".$msg."</marquee></td>";
				?></td>
                <td>
				<?php
						$msg="";
						$sql="select ev_title,ev_date, ev_des ,ev_imgnm from tbl_event where ev_date>='".date('Y.m.d')."'";
						$res=mysql_query($sql);
						while($row=mysql_fetch_row($res))
						{
							$msg=$msg.$row[1]."-".$row[0]."-".$row[2]. "<br><br>";
							$msg=$msg."<img src='eventimgs/".$row[3]."' width=100 height=100>";
							
						
						}
						echo "<td rowspan=7><marquee scrollamount='2' direction='up'>".$msg."</marquee></td>";
				?>				</td>
              </tr>
            </table>			
       	  </tr>
        </table>
	  </div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>&nbsp;</h4>
				<h4>Latest News</h4>
				<p>
				This website  has been designed by private Website for you, for free. You can use to send SMS , shering Photo and etc.</p>
			</div>
		  <div class="section contact">
				<h4>&nbsp;</h4>
				<h4>Contact Us</h4>
				<p>
				<span>Address:</span>D.Y.PATIL POL.TAL </p>
				<p>
					<span>Phone:</span>9579304746</p>
			  <p>
				  <span>Email:</span>familyconndyp@gmail.com</p>
			</div>
		  <div class="section">
		  <h1 align="center">&nbsp;</h1>
		  <h1 align="center"><a href="dblogout.php" class="subscribe  style8 style7">Logout</a></h1>
		  <h4>&nbsp;</h4>
				<h4>&nbsp;</h4>
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