<?php

//if (isset($_POST['submit']))
{
	session_start();
	session_unset();
	session_destroy();
	$_SESSION['u_email']=NULL ;
	header("Location: ../index.php");
	exit();
}

?>
