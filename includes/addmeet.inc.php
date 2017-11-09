<?php

session_start();

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php' ;

	$mtopic = mysqli_real_escape_string($conn,$_POST['meet_topic']) ;
	$msub = mysqli_real_escape_string($conn,$_POST['meet_sub']) ;
	$mhost = mysqli_real_escape_string($conn,$_POST['meet_host']) ;
	$mdesc = mysqli_real_escape_string($conn,$_POST['meet_desc']) ;
	$mloc = mysqli_real_escape_string($conn,$_POST['meet_loc']) ;
	$morg = mysqli_real_escape_string($conn,$_POST['meet_org']) ;

	//Error Handlers
	if (empty($mtopic)||empty($msub)||empty($mhost)||empty($mdesc)||empty($mloc))
	{
		header("location: ../home2.php?add=$fieldempty");
		$_SESSION['hres2'] = 'Please fill the form properly' ;
		exit();
	}
	else
	{
		$madmin=$_SESSION['u_id'] ;
		$sql = "INSERT INTO meeting (meet_admin,meet_topic,meet_subject,meet_host,meet_obj,meet_loc,meet_org) VALUES ('$madmin','$mtopic','$msub','$mhost','$mdesc','$mloc','$morg') ;" ;
		mysqli_query($conn,$sql) ;
		header("location: ../home2.php?add=success");
		$_SESSION['hres2'] = 'Success!' ;
		exit();
	}
}