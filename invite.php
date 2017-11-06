
<?php
session_start();
$_SESSION['sres']=NULL;
?>
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

	<div class="container" style="width: 500px; background: #000000; opacity: 0.5; margin-top: 60px ">
		<div class="row">
			<div class="col col-md-12" style="text-align: center; color: #ffffff">
				<strong>
					<h2>Meeting Invitation</h2>
				</strong>
			</div>
		</div>
		

		<form>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Recipant Email ID:</h5>
				</div>
				<div class="col col-md-8">
					<input type="email" name="mail" placeholder="Email">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Meeting Request ID:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="mail" placeholder="Meeting ID">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Name of the Host:</h5>
				</div>
				<div class="col col-md-8" >
					<input type="text" name="host" placeholder="Host">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Name of the topic:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="topic" placeholder="Topic">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Name of the Subject:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="sub" placeholder="Subject">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Participants:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="part">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Location:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="loc" placeholder="Location">
				</div>
			</div>
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Date:</h5>
				</div>
				<div class="col col-md-8">
					<input type="date" name="date">
				</div>
			</div>
			
			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Time:</h5>
				</div>
				<div class="col col-md-8">
					<input type="text" name="time" placeholder="Time">
				</div>
			</div>

			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Prerequisite document:</h5>
				</div>
				<div class="col col-md-8" style="padding: 15px">
					<input type="file" name="doc" value="choose file" style=" color: #fff">
				</div>
			</div>

			<div class="row">
				<div class="col col-md-4" style="text-align: center; color: #ffffff;">
					<h5>Priority:</h5>
				</div>
				<div class="col col-md-8">
					<input type="number" name="priority">	
				</div>
			</div>

			<div class="col-lg-12 col-xs-12">
				<div class="btn col-lg-6 col-xs-6">
					<button type="button" class="btn col-lg-8 col-xs-8">Send</button>
				</div>
				<div class="btn col-lg-6 col-xs-6">
					<button type="button" class="btn col-lg-8 col-xs-8" style="left: 70px">Cancel</button>
				</div>
			</div>
		</form>
	</div>
	<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>