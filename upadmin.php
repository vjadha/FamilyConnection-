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
	
	
	$sql="select * from tbl_admin where adm_username='".$_SESSION["usernm"]."'";
	$result =mysql_query($sql);
	$row=mysql_fetch_row($result);
	
	
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>upAdmin - MY FAMILY BOOK</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" /> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script> 
<script type="text/javascript" src="iepngfix.js"></script> 
</head>

<body>
<div id="mainWrap">
	
<form action="dbupadmin.php" method="post" enctype="multipart/form-data" >
  <table width="604" border="0" align="right">
    <tr>
      <th scope="col">&nbsp;</th>
      <td scope="col">Admin </td>
    </tr>
    <tr>
      <th scope="col">ID</th>
      <td scope="col"><input name="txtadminid" type="text" id="txtadminid" value="<?php echo $row[0];?>" readonly />    </tr>
    <tr>
      <th scope="row">Name</th>
      <td><input type="text" name="txtfname"placeholder="First Name" pattern="[a-zA-z ]{4,20}" value="<?php echo $row[1];?>"/>
        <input type="text" name="txtlname"placeholder="Last Name"pattern="[a-zA-z]{4,20}" value="<?php echo $row[2];?>"/></td>
    </tr>
    <tr>
      <th scope="row">Username </th>
      <td><label></label>      <input name="txtuname" type="text" placeholder="@gmail.com"pattern="[a-zA-Z0-9]{1,10}@[a-zA-Z]{1,10}.(com|in|org|cc)" value="<?php echo $row[3];?>" readonly/></td>
    </tr>
    <tr>
      <th scope="row">Password </th>
      <td><label></label>      <input type="password" name="txtpass" value="<?php echo $row[4];?>"/></td>
    </tr>
    <tr>
      <th scope="row">Confirm password </th>
      <td><label></label>      <input type="password" name="txtpassword"value="<?php echo $row[4];?>" /></td>
    </tr>
    <tr>
      <th scope="row">Birthday</th>
      <td><label>
        <input type="date" name="txtDOB" placeholder="DD/MM/YY"pattern="[0-9]{1,10}" value="<?php echo $row[5];?>"/>
      </label></td>
    </tr>
    <tr>
      <th scope="row">Gender</th>
	 <td> <input type="text" name="txtGender" readonly value="<?php echo $row[6];?>"/></td>
      <td><label></label>	  </td>
    </tr>
    <tr>
      <th scope="row">Mobile No </th>
      <td><label></label>      <input type="text" name="txtmobno" value="<?php echo $row[7];?>"/></td>
    </tr>
    <tr>
      <th scope="row">Address</th>
      <td><label></label>      <textarea name="txtaddress"><?php echo $row[8];?></textarea></td>
    </tr>
    <tr>
      <th scope="row">Occupation</th>
      <td><label></label>
          <label></label>
          <label>
          <select name="cmbocc">
            <option value="worker">worker</option>
            <option value="Government job">Government job</option>
            <option value="Engineer">Engineer</option>
            <option value="Police Officer ">Police Officer </option>
          </select>
		  <?php echo $row[9];?>;          </label></td>
    </tr>
    <tr>
      <th scope="row">Add Photo </th>
      <td><label>
        <input type="file" name="txtfile" />
      </label></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  
   <label> <a href="welcome.php" >Click To Back</a></label>
  
</div>
</body>
</html>
