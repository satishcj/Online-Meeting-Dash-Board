<?php

	session_start();

	if (isset($_POST['submit']))
	{
		include_once 'dbh.inc.php' ;
		$lastname = $_POST['lastname'] ;
		if (empty($lastname))
		{
			header("location: ../set1.php?set1=lastnameempty");
			$_SESSION['sres'] = 'Form Empty' ;
			exit();
		}
		else
		{
			if(!preg_match("/^[a-zA-Z]*$/",$lastname))
			{
				$_SESSION['sres'] = 'Invalid Entry' ;
				header("location: ../set1.php?set1=lastnameinvalid");
				exit();
			}
			else
			{
				$temp=$_SESSION['u_email'] ;
				$nsql="UPDATE users SET user_lastname='$lastname' WHERE user_email='$temp' " ;
				mysqli_query($conn,$nsql) ;
				$_SESSION['sres'] = 'Profile Updated Successfully' ;
				$_SESSION['u_lastname'] = $lastname ;
				header("location: ../set1.php?set1=$lastname-success");
				exit();
			}
		}
	}

?>