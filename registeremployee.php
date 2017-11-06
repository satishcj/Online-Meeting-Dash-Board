<?php
session_start();
$_SESSION['sres']=NULL;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Employee</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.set2.css">
</head>
<body>

	    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>ONLINE MEETING PORTAL</strong></a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav navbar-right">
                       	 <li role="presentation"><a href=""><strong>
                        	<?php
                        		if (isset($_SESSION['u_email']))
                        		{
                        			$temp = $_SESSION['u_firstname'] ;
                        			echo "Hello $temp";
                        		}
                        		else
                        		{
                        			echo "You're not logged in";
                        		}
                        	?>
                        </strong></a></li>
                        <li role="presentation"><a href="home.php"><strong>Home </strong></a></li>
                        <li role="presentation"><a href="set1.php"><strong>Settings </strong></a></li>
                        <li role="presentation"><a href="includes/logout.inc.php"><strong>
                        	<?php
                        		if (isset($_SESSION['u_email']))
                        		{
                        			echo "Logout";
                        		}
                        		else
                        		{
                        			echo "Login";
                        		}
                        	?>
                        </strong></a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
</header>

	<div class="container" style="width: 500px; background: #000; opacity: 0.6; margin-top: 200px ">
		<div class="row">
			<div class="col col-md-12" style="text-align: center; color: #fff">
				<strong>
					<h2>Register Employee</h2>
				</strong>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Name:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Email ID:</h5>
			</div>
			<div class="col col-md-8">
				<input type="email" name="" placeholder="ID">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Username:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Password:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Password" name="" placeholder="password">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Job Title:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Address:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Department:</h5>
			</div>
		<select>
  			<option value="....select-department.......">....select-department.......</option>
  			<option value="research">Research</option>
  			<option value="managment">Managment</option>
  			<option value="Marketing">Marketing</option>
  			<option value="finance">Finance</option>
  			<option value="accounting">Accounting</option>

		</select>
		
		<div class="col col-md-4" style="text-align: left; color: #fff">
				<h5>Gender:</h5>
			</div>
<div style="color: #fff">
  <input type="radio" name="gender" value="male" checked > Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  

<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Data of Birth:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Date" name="" >
			</div>
		</div>				
<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Phone no:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Number" name="" >
			</div>
</div>
		</div>
<form onsubmit="return checkForm(this);">
<input type="checkbox" required name="terms"><p style="text-align: center; color: #fff">I accept the <u>Terms and Conditions</u></p>
<p><input type="submit"></p>
</form>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>