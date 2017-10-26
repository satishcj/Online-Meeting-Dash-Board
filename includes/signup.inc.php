<?php

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
		header("location: ../index.php?signup=$nameempty");
		exit();
	}
	elseif (empty($email)) 
	{
		header("location: ../index.php?signup=emailempty");
		exit();
	}
	elseif (empty($phone))
	{
		header("location: ../index.php?signup=phoneempty");
		exit();
	}
	elseif (empty($pwd))
	{
		header("location: ../index.php?signup=pwdempty");
		exit();
	}
	elseif (empty($rpwd))
	{
		header("location: ../index.php?signup=pwdempty");
		exit();
	}
	else
	{
		//Check for valid inputs
		if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname))
		{
			header("location: ../index.php?signup=invalidname");
			exit();
		}
		else
		{
			//Check if email is valid
			if(!filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("location: ../index.php?signup=invalidemail");
				exit();
			}
			else
			{
				if ($pwd!=$rpwd)
				{
					header("location: ../index.php?signup=pwd!=rpwd");
					exit();
				}
				else
				{
					$sql = "SELECT * FROM users WHERE user_email='$email'" ;
					$result = mysqli_query($conn,$sql);
					$resultCheck=mysqli_num_rows($result);

					if ($resultCheck>0)
					{
						header("location: ../index.php?signup=userexisting");
						exit();
					}
					else
					{
						//Hashing the Password
						$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
						
						//Insert into DB
						$sql = "INSERT INTO users (user_firstname,user_lastname,user_email,user_phone,user_pwd) VALUES ('$firstname','$lastname','$email',$phone,'$hashedPwd') ;" ;
			
						mysqli_query($conn,$sql) ;
						header("location: ../index.php?signup=success");
						exit();
					}
				}
			}
		}
	}
}
else
{
	header("location: ../index.php");
	exit();
}


?>
