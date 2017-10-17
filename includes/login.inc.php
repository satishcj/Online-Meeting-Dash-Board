<?php

session_start();

if (isset($_POST['submit']))
{
	include 'dbh.inc.php' ;
	$email = mysqli_real_escape_string($conn,$_POST['email']) ;
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']) ;

	//Error Handlers
	//Check for empty inputs
	if (empty($email)||empty($pwd))
	{
		header("Location: ../login.php?login=empty") ;
		exit() ;	
	}
	else
	{
		$sql = "SELECT * FROM users WHERE user_email='$email' ; " ;
		$result = mysqli_query($conn,$sql) ;
		$resultCheck = mysqli_num_rows($result) ;
		if ($resultCheck<1)
		{
			header("Location: ../login.php?login=norecords") ;
			exit() ;
		}
		else
		{
			if ($row=mysqli_fetch_assoc($result))
			{
				//Dehashing the Password
				$hashedPwdCheck = password_verify($pwd, $row['user_pwd']) ;
				if ($hashedPwdCheck == false)
				{
					header("Location: ../login.php?login=pwderror") ;
					exit() ;
				}
				elseif($hashedPwdCheck == true)
				{
					//Login the User
					$_SESSION['u_email'] = $row['user_email'] ;
					$_SESSION['u_firstname'] = $row['user_firstname'] ;
					$_SESSION['u_lastname'] = $row['user_lastname'] ;
					$_SESSION['u_phone'] = $row['user_phone'] ;
					header("Location: ../login.php?login=success") ;
					exit() ;
				}
			}
		}
	}
}

?>