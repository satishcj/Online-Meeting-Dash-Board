<?php

session_start();

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php' ;

	$oname = mysqli_real_escape_string($conn,$_POST['org_name']) ;
	$oaddr = mysqli_real_escape_string($conn,$_POST['org_addr']) ;
	$ocity = mysqli_real_escape_string($conn,$_POST['org_city']) ;
	$ostate = mysqli_real_escape_string($conn,$_POST['org_state']) ;
	$octry = mysqli_real_escape_string($conn,$_POST['org_country']) ;
	$ophone = mysqli_real_escape_string($conn,$_POST['org_phone']) ;
	$ozip = mysqli_real_escape_string($conn,$_POST['org_zip']) ;
	$osite = mysqli_real_escape_string($conn,$_POST['org_site']) ;

	//Error Handlers
	if (empty($oname)||empty($oaddr)||empty($ocity)||empty($ostate))
	{
		header("location: ../home1.php?add=$fieldempty");
		$_SESSION['hres1'] = 'Please fill the form properly' ;
		exit();
	}
	else
	{
		$sql = "SELECT * FROM org WHERE org_name='$oname'" ;
		$result = mysqli_query($conn,$sql);
		$resultCheck=mysqli_num_rows($result);

		if ($resultCheck>0)
		{
			header("location: ../home1.php?add=$existing");
			$_SESSION['hres1'] = 'Organization Already Existing' ;
			exit();
		}
		else
		{
			$temp=$_SESSION['u_id'] ;
			$sql = "INSERT INTO org (org_admin,org_name,org_address,org_city,org_state,org_country,org_phone,org_zip,org_site) VALUES ('$temp','$oname','$oaddr','$ocity','$ostate','$octry','$ophone','$ozip','$osite') ;" ;
			mysqli_query($conn,$sql) ;
			header("location: ../home1.php?add=success");
			$_SESSION['hres1'] = 'Success!' ;
			exit();
		}
	}
}