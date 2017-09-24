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
	<title>Chat-MY FAMILY BOOK</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
<!--
.style6 {font-size: 36px; font-style: italic; font-weight: bold; font-family: "Times New Roman", Times, serif; color: #999999; }
.style1 {	color: #333333;
	font-weight: bold;
	font-style: italic;
}
.style8 {font-family: "Times New Roman", Times, serif}
-->
    </style>
</head>
<body>
<div id="header">
  <div class="clearfix">
    <div class="logo"> </div>
    <ul class="navigation">
      <li > <a href="welcome.php">Home</a> </li>
      <li> <a href="about.php">About</a> </li>
      <li> <a href="event.php">Event</a> </li>
      <li> <a href="news.php">News</a> </li>
      <li> <a href="contactbook.php">Contact</a> </li>
      <li class="active"> <a href="chat.php">Chat</a> </li>
    </ul>
    <h1 class="style1">&nbsp;</h1>
  </div>
  <span class="style6">MY FAMILY BOOK </span>
  <p align='right'> <font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font> 
  <img src="<?php echo $fnm; ?>" width="100" height="100" align="right"> </p>
</div>
</div>



	<div id="contents">
	  <div id="adbox">
	    <p>&nbsp;</p>
	  </div>
		<div class="highlight">
		  <div class="clearfix">
		    <form  method="post" action="dbchat.php" enctype="multipart/form-data">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <table width="562" border="0" align="center">
                <tr>
                  <th scope="col">&nbsp;</th>
                  <td scope="col"><strong>CHATING</strong> </td>
                </tr>
                <tr>
                  <th scope="col">From</th>
                  <td width="316" scope="col"> <label>
                    <input type="text" name="txtfromname" value="<?php echo $_SESSION["usernm"];?>" />
                    </label>                  </td>
                </tr>
                <tr>
                  <th height="47">To</th>
                  <td bgcolor="#F0F0F0"><label>
                    <select name="txttouersname">
					
					 <?php
			//admin user name to
			$sql="Select adm_username from tbl_chat ";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res))		
				echo "<option value='".$row[0]."'>". $row[0] ."</option>";
				
			//family member 
			$sql="Select fm_username from tbl_familymem ";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res))		
				echo "<option value='".$row[0]."'>". $row[0] ."</option>";
			
				
				
		?>
                    </select>
                  </label></td>
                </tr>
                <tr>
                  <th height="47">Massage</th>
                  <td bgcolor="#F0F0F0"><label>
                    <textarea name="txtmsg"></textarea>
                  </label></td>
                </tr>
                <tr>
                  <th height="47">File</th>
                  <td bgcolor="#F0F0F0"> <label>
                    <br>
                    <input type="file" name="txtfile" />
                    </label></td>
                </tr>
                <tr>
                  <th height="47">&nbsp;</th>
                  <td><label>
                    <input type="submit" name="Submit" value="Send" />
                    </label>
                      <label>
                      <input name="Submit2" type="reset" value="Cancel" />
                      </label>                  </td>
                </tr>
                <tr>
                  <th height="47"><a href="rptinbox.php" >Inbox</a>
                  </h1> 
                  </span></th>
                  <th><a href="rptoutbox.php" >Outbox</a></th>
                </tr>
              </table>
	          <p>&nbsp;</p>
	          <p>&nbsp;</p>
	          <p>&nbsp;</p>
		    </form>
		  </div>
		</div>
	  <div class="featured"></div>
	</div>
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
	        <h1 align="center"><a href="login.html" class="subscribe style8">Logout</a></h1>
	    </div>
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


