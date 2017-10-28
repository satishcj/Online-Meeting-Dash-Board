<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invitation</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.set2.css">
</head>
<body>

	<div class="container" style="width: 500px; background: #ffffff; opacity: 0.5; margin-top: 150px ">
		<div class="row">
			<div class="col col-md-12" style="text-align: center;">
				<strong>
					<h2>Register Employee</h2>
				</strong>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Name:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Email ID:</h5>
			</div>
			<div class="col col-md-8">
				<input type="email" name="" placeholder="ID">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Username:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Password:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Password" name="" placeholder="password">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Job Title:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Address:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="col col-md-4" style="text-align: center; ">
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
		
		<div class="col col-md-4" style="text-align: left; ">
				<h5>Gender:</h5>
			</div>
<div>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  

<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Data of Birth:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Date" name="" >
			</div>
		</div>				
<div class="row">
			<div class="col col-md-4" style="text-align: center; ">
				<h5>Phone no:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Number" name="" >
			</div>
</div>
		</div>
<form onsubmit="return checkForm(this);">
<p><input type="checkbox" required name="terms"> I accept the <u>Terms and Conditions</u></p>
<p><input type="submit"></p>
</form>

</body>
</html>