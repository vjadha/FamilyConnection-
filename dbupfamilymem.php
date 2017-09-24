<?php

//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	//echo "Hello";
	
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	
	$id=$_POST["txtid"];
	
	
	// code to save image
	$newfile= $id."-".$_FILES["txtfile"]["name"];
	echo $newfile;
	move_uploaded_file($_FILES["txtfile"]["tmp_name"],"familyimgs/".$newfile);

	
$qry="update tbl_familymem set fm_fname='". $_POST["txtfname"] ."',fm_lname='". $_POST["txtlname"] ."',fm_pass='".  $_POST["txtpass"] ."',fm_dob='". $_POST["txtDOB"]  ."',fm_mno='". $_POST["txtmobno"]  ."',	fm_add='". $_POST["txtaddress"]  ."',fm_occ='". $_POST["cmbocc"]  ."' ,fm_rel='".$_POST["cmbrelationship"]."',fm_image='". $newfile."' where fm_id='". $id ."'";
	
	
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