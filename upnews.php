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

<html>
<head>
	<meta charset="UTF-8">
	<title>UPNEWS - MY FAMILY BOOK </title>
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
	<div id="contents">
	  <div id="adbox"></div>
		<div class="highlight">
		  <div class="clearfix"></div>
		</div>
	  <div class="featured">

	    <form method="post" action="dbupnews.php">
          <table width="482" border="0" align="center">
            <tr>
              <th width="77" scope="col">&nbsp;</th>
              <th width="395" scope="col">NEWS</th>
            </tr>
            <tr>
              <th scope="col">ID</th>
              <td scope="col">
			  <select id="txtid" name="txtid">
                  <?php
			$sql="Select ne_id from tbl_news order by ne_id";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res))		
				echo "<option value='".$row[0]."'>". $row[0] ."</option>";
		?>
                </select>
              </td>
            </tr>
            <tr>
              <th scope="col">Title</th>
              <td scope="col"><label>
                <input type="text" name="txttitle"placeholder="NEWS Title" pattern="[a-zA-z ]{4,50}"/>
                </label>
              </td>
            </tr>
            <tr>
              <th><strong>Description</strong></th>
              <td><label>
                <textarea name="txtdes"placeholder="NEWS Descriptions"></textarea>
                </label>              </td>
            </tr>
            <tr>
              <th><strong>Date</strong></th>
              <td><label>
                <input type="date" name="txtdate" />
              </label></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><label>
                <input type="submit" name="Submit" value="Submit" />
                <input type="reset" name="Submit2" value="Cancel" />
              </label></td>
            </tr>
          </table>
        </form>
	  </div>
	</div>
	<div id="footer">
	  <div class="clearfix"></div>
		<div id="footnote">
			<div class="clearfix">
			  <div align="center"><a href="welcome.php" class="subscribe  style8">Click To Back</a>
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