<?php
//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	//echo "Hello";
	$id=$_POST["txtid"];
		
	
	$qry="update tbl_news set ne_title='". $_POST["txttitle"] ."',ne_date='". $_POST["txtdate"] ."',ne_des='". $_POST["txtdes"] ."'  where   ne_id='".$id."'";
	
	//echo "".$qry;
	
	
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record updated');</script>";
		header('refresh:0;url=news.php');
	}
	else
	{
		echo "".mysql_error();
		//echo "<script language='javascript'>alert('". mysql_error() ."')</script>";
	}  



?>