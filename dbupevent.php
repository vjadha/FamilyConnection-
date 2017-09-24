<?php

//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");

	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	

	//echo "Hello";

	$id=$_POST["txtid"];
	
	// code to save image
	$newfile= $id."-".$_FILES["txtfile"]["name"];
	echo $newfile;
	move_uploaded_file($_FILES["txtfile"]["tmp_name"],"eventimgs/".$newfile);

	
	$qry="update tbl_event set ev_title='". $_POST["txttitle"] ."',ev_date='". $_POST["txtdate"] ."',ev_des='". $_POST["txtdes"] ."' ,ev_imgnm='" .$newfile."' where  ev_id='".$id."'";
	
	
	
	//echo "".$qry;
	
	
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Saved');</script>";
		header('refresh:0;url=event.php');
	}
	else
	{
		echo "".mysql_error();
		//echo "<script language='javascript'>alert('". mysql_error() ."')</script>";
	}  



?>