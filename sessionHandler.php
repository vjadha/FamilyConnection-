<?php

if(!isset($_SESSION['usertype']))
{
	header("location:login.html");
}
?>