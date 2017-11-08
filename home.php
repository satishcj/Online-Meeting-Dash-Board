<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/semanticui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
</head>

<body>
	<div>
        <div class="ui top secondary pointing hidden menu stackable">
            <a class="item">
                <img class="ui avatar image" src="assets/feather/zap.svg">
                <strong>ONLINE MEETING PORTAL</strong>
            </a>
            <div class="right menu">
                <a class="active item" href="home.php">
                    <img class="ui avatar image" src="assets/feather/home.svg">
                    Home
                </a>
                <a class="ui item">
                    <img class="ui avatar image" src="assets/feather/user.svg">
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
                </a>
                <a class="ui item" href="set1.php">
                    <img class="ui avatar image" src="assets/feather/settings.svg">
                    Settings
                </a>
                <a class="ui item" href="includes/logout.inc.php">
                    <img class="ui avatar image" src="assets/feather/log-out.svg">
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
                </a>
            </div>
        </div>  
    </div>

	<br><br>
	
	<div class="ui centered grid stackable">
		
		<div class="three wide column">
			<div class="ui vertical menu" style="width: 100%;">
			  	<a class="active item">
			    	<h4 class="ui header">Dashboard</h4>
			    	<p>You can check all your activities here</p>
			  	</a>
			  	<a class="item" href="home1.php">
			    	<h4 class="ui header">Add an Organization</h4>
			    	<p>You can add an organization using this link</p>
			  	</a>
			  	<a class="item" href="home2.php">
			    	<h4 class="ui header">Create a Meeting</h4>
			    	<p>Create a meeting appointment with your employees</p>
			  	</a>
			</div>
		</div>

		<div class="ten wide column">
			
			<div>
				<h2 class="ui center aligned icon header centered">
					<i class="dashboard icon"></i>
					<div class="content">
						Dashboard
					</div>
					<div class="sub header">
						See all your activities here
					</div>
				</h2>
			</div>

			<div class="ui divider"></div>

		</div>
	
	</div>

</body>
</html>