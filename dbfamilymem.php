<?php

//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	//echo "Hello";
	
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	$qry="select max(fm_id)+1 from tbl_familymem";
	$res=mysql_query($qry);
	$row=mysql_fetch_row($res);
	
	if($row[0]=="")
		$id=1;
	else
		$id=$row[0];
	
	// code to save image
	$newfile= $id."-".$_FILES["txtfile"]["name"];
	echo $newfile;
	move_uploaded_file($_FILES["txtfile"]["tmp_name"],"familyimgs/".$newfile);

	
$qry="insert into tbl_familymem values('". $id ."','". $_POST["txtfname"] ."','". $_POST["txtlname"] ."','". $_POST["txtuname"] ."','". $_POST["txtpass"]  ."','". $_POST["txtDOB"]  ."','". $_POST["cmbgender"]  ."','". $_POST["txtmobno"]  ."','". $_POST["txtaddress"]  ."','". $_POST["cmbocc"]  ."','".$_POST["cmbrelationship"]."','".$newfile."','".$_POST["cmbsques"]."','".$_POST["txtans"]."' )";
	
	//echo "".$qry;
	
	
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Saved');</script>";
		header('refresh:0;url=welcome.php');
	}
	else
	{
		echo "".mysql_error();
		//echo "<script language='javascript'>alert('". mysql_error() ."')</script>";
	}  

?>