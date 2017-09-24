<?php

	//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");

	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	

	//echo "Hello";

	$qry="select max(ne_id)+1 from tbl_news ";
	$res=mysql_query($qry);
	$row=mysql_fetch_row($res);
	
	if($row[0]=="")
		$id=1;
	else
		$id=$row[0];
		
	
	$qry="insert into tbl_news values('". $id ."','". $_POST["txttitle"] ."','". $_POST["txtdate"] ."','". $_POST["txtdes"] ."')";
	
	//echo "".$qry;
	
	
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Saved');</script>";
		header('refresh:0;url=news.php');
	}
	else
	{
		echo "".mysql_error();
		//echo "<script language='javascript'>alert('". mysql_error() ."')</script>";
	}  



?>