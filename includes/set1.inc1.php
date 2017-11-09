<?php

	session_start();

	if (isset($_POST['submit']))
	{
		include_once 'dbh.inc.php' ;
		$firstname = $_POST['firstname'] ;
		if (empty($firstname))
		{
			header("location: ../set1.php?set1=firstnameempty");
			$_SESSION['sres1'] = 'Form Empty' ;
			exit();
		}
		else
		{
			if(!preg_match("/^[a-zA-Z]*$/",$firstname))
			{
				$_SESSION['sres1'] = 'Invalid Entry' ;
				header("location: ../set1.php?set1=firstnameinvalid");
				exit();
			}
			else
			{
				$temp=$_SESSION['u_email'] ;
				$nsql="UPDATE users SET user_firstname='$firstname' WHERE user_email='$temp' " ;
				mysqli_query($conn,$nsql) ;
				$_SESSION['sres1'] = 'Profile Updated Successfully' ;
				$_SESSION['u_firstname'] = $firstname ;
				header("location: ../set1.php?set1=$firstname-success");
				exit();
			}
		}
	}

?>