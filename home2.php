<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meetings</title>
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
			  	<a class="item" href="home.php">
			    	<h4 class="ui header">Dashboard</h4>
			    	<p>You can check all your activities here</p>
			  	</a>
			  	<a class="item" href="home1.php">
			    	<h4 class="ui header">Add an Organization</h4>
			    	<p>You can add an organization using this link</p>
			  	</a>
			  	<a class="active item">
			    	<h4 class="ui header">Create a Meeting</h4>
			    	<p>Create a meeting appointment with your employees</p>
			  	</a>
			</div>
		</div>

		<div class="ten wide column grid ui large grid">
			
			<div>
				<h2 class="ui center aligned icon header centered">
					<i class="users icon"></i>
					<div class="content">
						Meetings
					</div>
					<div class="sub header">
						Create a meeting appointment with your employees
					</div>
				</h2>
			</div>

			<div class="ui divider"></div>

            <div>
                <h4 class="ui">
                    Scheduled Meetings
                </h4>
            </div>

            <div class="row ui three stackable cards centered">

                <div class="ui card">
                  <div class="content">
                    <div class="header">SRM University</div>
                  </div>
                  <div class="content">
                    <h4 class="ui sub header">Educational Institution</h4>
                    <div class="ui small feed">
                      <div class="event">
                        <div class="content">
                          <div class="summary">
                             Kattankulathur, Chennai-603203, Tamil Nadu, India
                          </div>
                        </div>
                      </div>
                      <div class="event">
                        <div class="content">
                          <div class="summary">
                             Website: <a href="www.srmuniv.edu.in">SRM University</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="extra content">
                    <button class="ui button">View Organization</button>
                  </div>
                </div>

                <div class="ui card">
                  <div class="content">
                    <div class="header">Semantic UI</div>
                  </div>
                  <div class="content">
                    <h4 class="ui sub header">Front End Framework</h4>
                    <div class="ui small feed">
                      <div class="event">
                        <div class="content">
                          <div class="summary">
                             Open Source front end CSS/JS framework, MIT Liscense
                          </div>
                        </div>
                      </div>
                      <div class="event">
                        <div class="content">
                          <div class="summary">
                             Website: <a href="www.semantic-ui.com">SEMANTIC-UI</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="extra content">
                    <button class="ui button">View Organization</button>
                  </div>
                </div>
            </div>

            <div class="ui horizontal divider header">
                <i class="add square icon"></i>
                Create a Meeting
            </div>

            <div class="row">
                <div class="column">
                    <form class="ui large grid">
                        <div class="row">
                            <h4 class="ui">
                                Enter the Title of the Meeting
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Title">
                        </div>

                        <div class="row">
                            <h4 class="ui">
                                Enter the Name of the Host
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Host Name">
                        </div>

                        <div class="row">
                            <h4 class="ui">
                                Enter the Subject
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Subject">
                        </div>

                        <div class="row">
                            <h4 class="ui">
                                Enter the Location
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Location">
                        </div>

                        <div class="row">
                            <h4 class="ui">
                                Enter the Date
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Date">
                        </div>

                        <div class="row">
                            <h4 class="ui">
                                Enter the Time
                            </h4>
                        </div>
                        <div class="ui input row">
                            <input type="text" name="" placeholder="Time">
                        </div>

                        <div class="ui divider"></div>

                        <div class="row">
                            <div class="ui slider checkbox">
                                <input type="checkbox" name="newsletter">
                                <label>I accept the terms and conditions</label>
                            </div>
                        </div>
                            
                        <div class="row centered">
                            <button class="ui primary basic button">Create New Meeting</button>
                        </div>
                    </form>                
                </div>
            </div>

		</div>
	
	</div>

</body>
</html>