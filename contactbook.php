<?php
mysql_select_db("dbfamilyconn");
session_start();
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
	<title>Contactbook- MY FAMILY BOOK</title>
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
      <li class="active"> <a href="contactbook.php">Contact</a> </li>
      <li> <a href="chat.php">Chat</a> </li>
    </ul>
    <h1 class="style1">&nbsp;</h1>
  </div>
  <span class="style6">MY FAMILY BOOK </span>
  <p align='right'> <font color='#FFFFFF'>Welcome <?php echo $_SESSION["fullnm"]; ?></font> <img src="<?php echo $fnm; ?>" width="100" height="100" align="right"> </p>
</div>
</div>


<div id="contents">
		<div class="clearfix">
		  <div class="sidebar"></div>
		  
				<h1>Contact</h1>
				<p>&nbsp;</p>
		        <form method="post" action="dbcontactbook.php">
                  <table width="503" height="10" border="0" align="center">
                    <tr>
                      <th scope="col">Name</th>
                      <td scope="col"><label>
                        <input type="text" name="txtfname"placeholder="First Name" pattern="[a-zA-z ]{4,20}"  required/>
                        </label>
                          <label>
                          <input type="text" name="txtlname"placeholder="Last Name" pattern="[a-zA-z ]{4,20}"  required />
                        </label></td>
                    </tr>
                    <tr>
                      <th>Address</th>
                      <td><label>
                        <textarea name="txtaddress"></textarea>
                      </label></td>
                    </tr>
                    <tr>
                      <th>Type</th>
                      <td><label>
                        <select name="cmbtype">
                          <option value="Business">Business</option>
                          <option value="Friend">Friend</option>
                          <option value="Relative">Relative</option>
                          <option value="Staff">Staff</option>
                        </select>
                        </label>                      </td>
                    </tr>
                    <tr>
                      <th>Contact No. </th>
                      <td><input type="text" name="txtcontano"placeholder="99-9999-9999" pattern="[0-9]{1,10}"  required/></td>
                    </tr>
                    <tr>
                      <th>Email Id </th>
                      <td><input name="txtemail" type="text" placeholder="@gmail.com"pattern="[a-zA-Z0-9]{1,10}@[a-zA-Z]{1,10}.(com|in|org|cc)"/></td>
                    </tr>
                    <tr>
                      <th>Birth Date </th>
                      <td><input type="date" name="txtdob" placeholder="DD/MM/YY"pattern="[0-9]{1,10}"/></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td></label>
                        <input type="submit" name="Submit" value="Submit" />
                        <input name="CANCEL" type="reset" id="CANCEL" value="CANCEL" /></td></tr>
                  </table>
            </form>      
	        <p>&nbsp;</p>
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
		  <div class="clearfix"></div>
		</div>
	</div>
	<div id="footer">
	  <div class="clearfix"></div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
		  </div>
		</div>
	</div>
</body>
</html>