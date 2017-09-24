<?php
session_start();
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" /> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script> 
<script type="text/javascript" src="iepngfix.js"></script> 
</head>

<body>
<div id="mainWrap">

<form method="post" action="dbupevent.php">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="200" border="0" align="center">
  <tr>
    <th scope="col">&nbsp;</th>
    <th scope="col">EVENT
  </tr>
  <tr>
    <th scope="col">ID</th>
    <td scope="col">    
	<select id="txtid" name="txtid">
		<?php
			$sql="Select ev_id from tbl_event order by ev_id";
			$res=mysql_query($sql);
			while($row=mysql_fetch_row($res))		
				echo "<option value='".$row[0]."'>". $row[0] ."</option>";
		?>
	</select>  
  </tr>
  <tr>
    <th scope="col">Title</th>
    <td scope="col"><input type="text" name="txttitle" /></td>
  </tr>
  <tr>
    <th>Date</th>
    <td>      
      <label>
      <input type="date" name="txtdate" />
      </label>
    <label></label></td>
  </tr>
  <tr>
    <th>Description</th>
    <td>      <label>
      <textarea name="txtdes"></textarea>
      </label>
    <label></label></td>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <td><label>
      <input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" />
    </label></td>
  </tr>
</table>
</form>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</body>
</html>
