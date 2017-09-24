<?php

	//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	session_start();
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	

	$sql="select * from tbl_admin where adm_username='". $_POST["txtuname"] ."' and adm_pass='".  $_POST["txtpass"] ."'";
	//echo $sql;
	$res=mysql_query($sql);
	$row=mysql_fetch_row($res);
	if($row[0]!="")
	{
		$_SESSION["usertype"]="admin";
		$_SESSION["usernm"]=$_POST["txtuname"];
		header('location:reportlist.php');
	}
	else
	{
		$sql="select * from tbl_familymem where fm_username='". $_POST["txtuname"] ."' and fm_pass='".  $_POST["txtpass"] ."'";
		//echo $sql;
		$res=mysql_query($sql);
		$row=mysql_fetch_row($res);
		if($row[0]!="")
		{
			$_SESSION["usertype"]="fm";			
			$_SESSION["usernm"]=$_POST["txtuname"];
			header('location:reportlist.php');
		}
		else
		{
			echo "Invalid Login ....";
			
		}
				
	}
	 



?>