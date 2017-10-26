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

	<nav class="navbar navbar-default"> 
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>ONLINE MEETING PORTAL</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
        </div>
    </nav>

	<div class="container" style="width: 500px; background: #000000; opacity: 0.5; margin-top: 100px ">
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
					<h5>Meeting Request ID:</h5>
				</div>
				<div class="col col-md-8">
					<input type="email" name="mail" placeholder="ID">
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
					<input type="Date" name="date">
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
				<div class="col col-md-8">
					<input type="Button" name="doc" value="choose file">
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

			<div class="row">
				<div class="col col-md-4">
					<input type="Button" name="loc" value="send">
				</div>
				<div class="col col-md-8">
					<input type="Button" name="loc" value="cancel">
				</div>
			</div>
		</form>
		
	</div>
		
</body>
</html>