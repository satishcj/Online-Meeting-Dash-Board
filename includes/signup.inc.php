<?php

session_start();

if (isset($_POST['submit']))
{
	include_once 'dbh.inc.php' ;

	$firstname = mysqli_real_escape_string($conn,$_POST['firstname']) ;
	$lastname = mysqli_real_escape_string($conn,$_POST['lastname']) ;
	$email = mysqli_real_escape_string($conn,$_POST['email']) ;
	$phone = mysqli_real_escape_string($conn,$_POST['phone']) ;
	$pwd = mysqli_real_escape_string($conn,$_POST['pwd']) ;
	$rpwd = mysqli_real_escape_string($conn,$_POST['rpwd']) ;
	

	//Error Handlers

	//Check for empty fields
	if (empty($firstname)||empty($lastname))
	{
		header("location: ../signup.php?signup=$nameempty");
		$_SESSION['res2'] = 'Please fill the form properly' ;
		exit();
	}
	elseif (empty($email)) 
	{
		header("location: ../signup.php?signup=emailempty");
		$_SESSION['res2'] = 'Please fill the form properly' ;
		exit();
	}
	elseif (empty($phone))
	{
		header("location: ../signup.php?signup=phoneempty");
		$_SESSION['res2'] = 'Please fill the form properly' ;
		exit();
	}
	elseif (empty($pwd))
	{
		header("location: ../signup.php?signup=pwdempty");
		$_SESSION['res2'] = 'Please fill the form properly' ;
		exit();
	}
	elseif (empty($rpwd))
	{
		header("location: ../signup.php?signup=pwdempty");
		$_SESSION['res2'] = 'Please fill the form properly' ;
		exit();
	}
	else
	{
		//Check for valid inputs
		if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname))
		{
			header("location: ../signup.php?signup=invalidname");
			$_SESSION['res2'] = 'You have entered an invalid name' ;
			exit();
		}
		else
		{
			//Check if email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("location: ../signup.php?signup=invalidemail");
				$_SESSION['res2'] = 'You have entered an invalid email' ;
				exit();
			}
			else
			{
				if ($pwd!=$rpwd)
				{
					header("location: ../signup.php?signup=pwd!=rpwd");
					$_SESSION['res2'] = 'Passwords dont match' ;
					exit();
				}
				else
				{
					$sql = "SELECT * FROM users WHERE user_email='$email'" ;
					$result = mysqli_query($conn,$sql);
					$resultCheck=mysqli_num_rows($result);

					if ($resultCheck>0)
					{
						header("location: ../signup.php?signup=userexisting");
						$_SESSION['res2'] = 'User already existing' ;
						exit();
					}
					else
					{
						//Hashing the Password
						$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
						
						//Insert into DB
						$sql = "INSERT INTO users (user_firstname,user_lastname,user_email,user_phone,user_pwd) VALUES ('$firstname','$lastname','$email',$phone,'$hashedPwd') ;" ;
			
						mysqli_query($conn,$sql) ;
						header("location: ../signup.php?signup=success");
						$_SESSION['res2'] = 'Account Created Successfully' ;
						exit();
					}
				}
			}
		}
	}
}
else
{
	header("location: ../signup.php");
	exit();
}


?>