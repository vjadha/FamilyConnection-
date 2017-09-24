<?php
//	mysql_connect("localhost","root","");
//	mysql_select_db("dbfamilyconn");
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	$qry="select max(chat_id)+1 from tbl_chat";
	$res=mysql_query($qry);
	$row=mysql_fetch_row($res);
	
	if($row[0]=="")
		$id=1;
	else
		$id=$row[0];
	
	// code to save image
	 $newfile= $id."-".$_FILES["txtfile"]["name"];
	//echo $newfile;
	move_uploaded_file($_FILES["txtfile"]["tmp_name"],"docs/".$newfile);
	
	
	$qry="insert into tbl_chat values('". $id."','".date('Y.m.d')."','". $_POST["txtfromname"] ."','". $_POST["txttouersname"] ."','". $_POST["txtmsg"] ."','". $newfile ."')";
	
	
	//echo "".$qry;
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Saved');</script>";
		header('refresh:0;url=chat.php');
	}
	else
	{
		echo "".mysql_error();
	}  

?>