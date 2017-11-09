<?php

	session_start();

	if (isset($_POST['submit']))
	{
		include_once 'dbh.inc.php' ;
		$phone = $_POST['phone'] ;
		if (empty($phone))
		{
			header("location: ../set1.php?set1=phone-empty");
			$_SESSION['sres1'] = 'Form Empty' ;
			exit();
		}
		else
		{
			$temp=$_SESSION['u_email'] ;
			$nsql="UPDATE users SET user_phone='$phone' WHERE user_email='$temp' " ;
			mysqli_query($conn,$nsql) ;
			$_SESSION['sres1'] = 'Profile Updated Successfully' ;
			$_SESSION['u_phone'] = $phone ;
			header("location: ../set1.php?set1=$phone-success");
			exit();
	
		}
	}

?>