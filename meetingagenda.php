
<?php
session_start();
$_SESSION['sres']=NULL;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meeting Agenga</title>
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

	<div class="container" style="width: 500px; background: #000; opacity: 0.5; margin-top: 100px ">
		<div class="row">
			<div class="col col-md-12" style="text-align: center; color: #fff">
				<strong>
					<h2>Meeting Agenda</h2>
				</strong>
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Agenda ID:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" placeholder="ID">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Name of the Host:</h5>
			</div>
			<div class="col col-md-8">
				<input type="email" name="" placeholder="Host">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff ">
				<h5>Name of the Topics:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" placeholder="Topics">
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Name of Attendees:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Date:</h5>
			</div>
			<div class="col col-md-8">
				<input type="Date" name="" >
			</div>
		</div>
		<div class="row">
			<div class="col col-md-4" style="text-align: center; color: #fff">
				<h5>Discussion:</h5>
			</div>
			<div class="col col-md-8">
				<input type="text" name="" style="padding: 50px 50px">
			</div>
		</div>
		<div class="col-lg-12 col-xs-12">
				<div class="btn col-lg-6 col-xs-6">
					<button type="button" class="btn col-lg-8 col-xs-8">Submit</button>
				</div>
				<div class="btn col-lg-6 col-xs-6">
					<button type="button" class="btn col-lg-8 col-xs-8" style="left: 70px">Reset</button>
				</div>
			</div>				
</form>

	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>