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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password - MY FAMILY BOOK</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" /> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script> 
<script type="text/javascript" src="iepngfix.js"></script> 
</head>

<body>
<div id="mainWrap">
<div id="mainPanel">
  <p>&nbsp;</p>
  <form method="post" action="forgotpass.php">
    <table width="516" border="0" align="center">
      <tr>
        <th width="90" scope="col">&nbsp;</th>
        <th width="256" scope="col">Change Password </th>
      </tr>
      <tr>
        <th scope="row">User name </th>
        <td><label>
          <input name="txtusername" type="text" id="txtusername" />
        </label></td>
      </tr>
      <tr>
        <th scope="row">Securty question </th>
        <td><label>
          <select name="cmbsques" id="cmbsques">
            <option value="What is your favourite actor">What is your favourite actor</option>
            <option value="What is your favourite film">What is your favourite film</option>
            <option value="What is your best friend birth date ">What is your best friend birth date </option>
          <option value="What is your  favourite number ">What is your  favourite number </option>
		<option value="What is your  favourite book ">What is your  favourite book </option>
				
					  
		  </select>
        </label></td>
      </tr>
      <tr>
        <th scope="row">Answer</th>
        <td><label>
          <input name="txtans" type="text" id="txtans" />
        </label></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><label>
          <input type="submit" name="Submit" value="Submit" />
          </label>        </td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  </div>
</div>
</body>
</html>
<?php
if($_POST)
{
		include_once("sessionHandler.php");
		include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	$qry="select adm_pass from tbl_admin where adm_username='".$_POST["txtusername"]."'  and adm_sques='".$_POST["cmbsques"]."'  and adm_sans='".$_POST["txtans"]."'";
	$res=mysql_query($qry);
	$row=mysql_fetch_row($res);
	if($row[0]!="")
	{
		echo "<script language='javascript'>alert('your password is ".$row[0]."');</script>";
		header('refresh:0;url=login.html');
	}
	else
	{
		$qry="select fm_pass from tbl_familymem where fm_username='".$_POST["txtusername"]."'  and fm_sques='".$_POST["cmbsques"]."'  and fm_sans='".$_POST["txtans"]."'";
		$res=mysql_query($qry);
		$row=mysql_fetch_row($res);
		if($row[0]!="")
		{
			echo "<script language='javascript'>alert('your password is ".$row[0]."');</script>";
			header('refresh:0;url=login.html');

		}
		else
		{
			echo "<script language='javascript'>alert('invalid authentication');</script>";
			header('refresh:0;url=forgotpass.php');

		}
	}
	}
?>