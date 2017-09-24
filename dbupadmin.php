<?php
	//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	


	$id=$_POST["txtadminid"];


// code to save image
	$newfile= $id."-".$_FILES["txtfile"]["name"];
	echo $newfile;
	move_uploaded_file($_FILES["txtfile"]["tmp_name"],"adminimgs/".$newfile);
	
	
		//$qry="update tbl_news set ne_title='". $_POST["txttitle"] ."',ne_date='". $_POST["txtdate"] ."',ne_des='". $_POST["txtdes"] ."'  where   ne_id='".$id."'";
		
	$qry="update tbl_admin set adm_fname='". $_POST["txtfname"] ."',adm_lname='". $_POST["txtlname"] ."',adm_pass='".  $_POST["txtpass"] ."',adm_dob='". $_POST["txtDOB"]  ."',adm_mno='". $_POST["txtmobno"]  ."',adm_add='". $_POST["txtaddress"]  ."',adm_occ='". $_POST["cmbocc"]  ."',adm_image='". $newfile."' where adm_id='". $id ."'";
	
	
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Updated')</script>";
		header('refresh:0;url=welcome.php');
	}
	else
	{
		echo "<script language='javascript'>alert('". mysql_error() ."')</script>";
	}  

?>