<?php

	//mysql_connect("localhost","root","");
	//mysql_select_db("dbfamilyconn");
	session_start();
	session_destroy();
		echo "<script language='javascript'>alert('Logout successflly');</script>";
			header('refresh:0;url=login.html');
	

?>