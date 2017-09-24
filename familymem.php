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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Family Member Registration-MY FAMILY BOOK</title>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="images/icon.ico" /> 
<script type="text/javascript" src="iepngfix_tilebg.js"></script> 
<script type="text/javascript" src="iepngfix.js"></script> 

<script language="javascript">
	function setagelimit()
	{
		//alert("1");
		document.getElementById("txtDOB").max="2000-01-01";
	}
</script>
</head>

<body>
<div id="mainWrap">
<div id="mainPanel">
  <p>&nbsp;</p>
  															
  <form action="dbfamilymem.php" method="post" enctype="multipart/form-data">
    <table width="482" height="393" border="0" align="right">
      <tr>
        <th width="119" scope="col">&nbsp;</th>
        <td width="353" scope="col"><label></label>
            <label></label>
            <em><strong>Family Member Registration </strong></em></td>
      </tr>
      <tr>
        <th scope="row">Name</th>
        <td><label></label>
            <input type="text" name="txtfname" placeholder="First Name" pattern="[a-zA-z ]{4,20}"required />
            <input type="text" name="txtlname"placeholder="Last Name" pattern="[a-zA-z ]{4,20}" required /></td>
      </tr>
      <tr>
        <th scope="row">UserName</th>
        <td><label></label>
            <input type="text" name="txtuname"placeholder="abcd99@gmail.com"pattern="[a-zA-Z0-9]{1,100}@[a-zA-Z]{1,10}.(com|in|org|cc)"  /></td>
      </tr>
      <tr>
        <th scope="row">Password</th>
        <td><label></label>
            <input type="password" name="txtpass" required /></td>
      </tr>
      <tr>
        <th scope="row">Confirm Password</th>
        <td><label></label>
            <input type="password" name="txtcpassword" /></td>
      </tr>
      <tr>
        <th scope="row">BirthDate</th>
        <td><label></label>
            <label></label>
            <input type="Date" name="txtDOB" placeholder="DD/MM/YY" /></td>
      </tr>
      <tr>
        <th scope="row">Gender</th>
        <td><label></label>
            <select name="cmbgender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
     
          </select></td>
      </tr>
      <tr>
        <th scope="row">Mobile No </th>
        <td><label></label>
            <label></label>
            <input type="text" name="txtmobno"placeholder="99-9999-9999" pattern="[0-9]{1,10}"required /></td>
      </tr>
      <tr>
        <th scope="row">Address</th>
        <td><label></label>
            <textarea name="txtaddress" placeholder="Address" pattern="[a-zA-z0-9`!@#;*()_-\,.?/ ]{4,100}" required ></textarea></td>
      </tr>
      <tr>
        <th scope="row">Occupation</th>
        <td><select name="cmbocc">
              <option value="worker">worker</option>
              <option value="Government job">Government job</option>
              <option value="Engineer">Engineer</option>
              <option value="Police  Officer ">Police  Officer </option>
			  
            </select></td>
      </tr>
      <tr>
        <th scope="row">Add Photo </th>
        <td><label>
          <input type="file" name="txtfile" />
        </label></td>
      </tr>
      <tr>
        <th scope="row">Relationship</th>
        <td><label></label>
            <label></label>
            <select name="cmbrelationship">
              <option value="Choose Relationship">Choose Relationship</option>
              <option value="Mother">Mother</option>
              <option value="Father">Father</option>
              <option value="Son">Son</option>
              <option value="Sister">Sister</option>
              <option value="Brother">Brother</option>
              <option value="Aunt">Aunt</option>
              <option value="Uncle">Uncle</option>
              <option value="Niece">Niece</option>
              <option value="Nephew">Nephew</option>
              <option value="Cousin(Female)">Cousin(Female)</option>
              <option value="Cousin(Male)">Cousin(Male)</option>
              <option value="Grandfather">Grandfather</option>
              <option value="Grandmother">Grandmother</option>
              <option value="GrandDaughter">GrandDaughter</option>
              <option value="Grandson">Grandson</option>
              <option value="Stepsister">Stepsister</option>
              <option value="Stepmother">Stepmother</option>
              <option value="Stepfather">Stepfather</option>
              <option value="Stepdaughter">Stepdaughter</option>
              <option value="Stepson">Stepson</option>
              <option value="Sister- in- low">Sister-in-low</option>
              <option value="Brother-in-low">Brother-in-low</option>
              <option value="Father-in-low">Father-in-low</option>
              <option value="Mother-in-low">Mother-in-low</option>
              <option value="Daughter-in-low">Daughter-in-low</option>
              <option value="Son-in-low">Son-in-low</option>
              <option value="sibling(gender Neutral )">sibling(gender Neutral )</option>
              <option value="Parent(gender Neutral )">Parent(gender Neutral )</option>
              <option value="Child(gender Neutral)">Child(gender Neutral)</option>
              <option value="Sibling of  Parent(gender Neutral)">Sibling of Parent(gender Neutral)</option>
              <option value="Child of Sibling(gender Neutral)">Child of Sibling(gender Neutral)</option>
              <option value="Cousin(gender Neutral)">Cousin(gender Neutral)</option>
              <option value="Grandparent(gender Neutral)">Grandparent(gender Neutral)</option>
              <option value="GrandChild(gender Neutral)">GrandChild(gender Neutral)</option>
              <option value="StepSibling(gender Neutral)">StepSibling(gender Neutral)</option>
              <option value="StepParent(gender Neutral)">StepParent(gender Neutral)</option>
              <option value="StepChild(gender Neutral)">StepChild(gender Neutral)</option>
              <option value="Sibling-in-low(gender Neutral)">Sibling-in-low(gender Neutral)</option>
              <option value="Parent-in-low(gender Neutral)">Parent-in-low(gender Neutral)</option>
              <option value="Child-in-low(gender Neutral)">Child-in-low(gender Neutral)</option>
          </select></td>
      </tr>
      <tr>
        <th scope="row">Securty question </th>
        <td><label>
          <select name="cmbsques" id="cmbsques">
            <option value="What is your favourite actor">What is your favourite actor</option>
            <option value="What is your favourite film">What is your favourite film</option>
            <option value="What is your best friend birth date ">What is your best friend birth date </option>
          </select>
        </label></td>
      </tr>
      <tr>
        <th scope="row">Answer</th>
        <td><label>
          <input name="txtans" type="text" id="txtans" required />
        </label></td>
      </tr>
      <tr>
        <th scope="row">&nbsp;</th>
        <td>&nbsp;</td>
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</div>
</body>
</html>
