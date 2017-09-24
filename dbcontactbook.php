<?php
//	mysql_connect("localhost","root","");
//	mysql_select_db("dbfamilyconn");
	include_once("dbconfig.php");
	$data = new dbconn();
	mysql_connect($data->host,$data->user,$data->password);
	mysql_select_db($data->db);
	
	$qry="select max(con_id)+1 from tbl_conteno";
	$res=mysql_query($qry);
	$row=mysql_fetch_row($res);
	
	if($row[0]=="")
		$id=1;
	else
		$id=$row[0];
	
	// code to save image
//	$newfile= $id."-".$_FILES["txtfile"]["name"];
	//echo $newfile;
	//move_uploaded_file($_FILES["txtfile"]["tmp_name"],"adminimgs/".$newfile);
	
	
	$qry="insert into tbl_conteno values('". $id."','". $_POST["txtfname"] ."','". $_POST["txtlname"] ."','". $_POST["txtaddress"] ."','". $_POST["cmbtype"]  ."','". $_POST["txtcontano"]  ."','". $_POST["txtemail"]  ."','". $_POST["txtdob"]  ."')";
	
	
	
	
	//echo "".$qry;
	
	if(mysql_query($qry))
	{
		echo "<script language='javascript'>alert('Record Saved');</script>";
		header('refresh:0;url=home.html');
	}
	else
	{
		echo "".mysql_error();
	}  

?>