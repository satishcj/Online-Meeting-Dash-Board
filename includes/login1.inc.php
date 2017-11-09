<?php
	session_start() ;
	class User
	{
		public $uobj_firstname ;
		public $uobj_lastname ;
		public $uobj_email ;
		protected $uobj_uid ;
		private $uobj_phone ;

		public function reg_user($firstname,$lastname,$email,$phone,$pwd,$rpwd)
		{
			include "dbh.inc.php";
			if (empty($firstname)||empty($lastname))
			{
				header("location: ../signup.php?signup=$nameempty");
				$_SESSION['res2'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($email)) 
			{
				header("location: ../signup.php?signup=emailempty");
				$_SESSION['res2'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($phone))
			{
				header("location: ../signup.php?signup=phoneempty");
				$_SESSION['res2'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($pwd))
			{
				header("location: ../signup.php?signup=pwdempty");
				$_SESSION['res2'] = 'Please fill the form properly' ;
				return false ;
			}
			elseif (empty($rpwd))
			{
				header("location: ../signup.php?signup=pwdempty");
				$_SESSION['res2'] = 'Please fill the form properly' ;
				return false ;
			}
			else
			{
				//Check for valid inputs
				if(!preg_match("/^[a-zA-Z]*$/",$firstname) || !preg_match("/^[a-zA-Z]*$/",$lastname))
				{
					header("location: ../signup.php?signup=invalidname");
					$_SESSION['res2'] = 'You have entered an invalid name' ;
					return false ;
				}
				else
				{
					//Check if email is valid
					if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
						header("location: ../signup.php?signup=invalidemail");
						$_SESSION['res2'] = 'You have entered an invalid email' ;
						return false ;
					}
					else
					{
						if ($pwd!=$rpwd)
						{
							header("location: ../signup.php?signup=pwd!=rpwd");
							$_SESSION['res2'] = 'Passwords dont match' ;
							return false ;
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
								return false ;
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
								return true ;
							}
						}
					}
				}
			}
		}
		
		public function check_login($email, $pwd)
		{
			include "dbh.inc.php";
			//Check for empty inputs
			if (empty($email)||empty($pwd))
			{
				header("Location: ../login.php?login=empty") ;
				$_SESSION['res1'] = 'Please fill the form properly' ;
				return false;	
			}
			else
			{
				$sql = "SELECT * FROM users WHERE user_email='$email' ; " ;
				$result = mysqli_query($conn,$sql) ;
				$resultCheck = mysqli_num_rows($result) ;
				if ($resultCheck<1)
				{
					header("Location: ../login.php?login=norecords") ;
					$_SESSION['res1'] = 'No Records' ;
					return false;
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
							$_SESSION['res1'] = 'You have entered an incorrect password' ;
							return false;
						}
						elseif($hashedPwdCheck == true)
						{
							//Login the User
							$_SESSION['u_email'] = $row['user_email'] ;
							$_SESSION['u_firstname'] = $row['user_firstname'] ;
							$_SESSION['u_lastname'] = $row['user_lastname'] ;
							$_SESSION['u_phone'] = $row['user_phone'] ;
							$_SESSION['u_id'] = $row['user_id'] ;
							return true;
						}
					}
				}
			}
		}

	}

?>