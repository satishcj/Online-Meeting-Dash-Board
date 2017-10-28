<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
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
    <form method="get" action="/onlinemeeting/invite.php">
        <div class="container-con" style="opacity: 0.7;">
            <div class="container-btn">
                <button type="sumbit" 
                    style="background-color: #000; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 18px;">
                    Send Invite
                </button>     
            </div>
        </div>
    </form>
    <form method="get" action="\onlinemeeting/registerorg.php">
        <div class="container-con" style="opacity: 0.7;">
            <div class="container-btn">
                <button type="sumbit" 
                    style="background-color: #000; /* Green */
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 18px;">
                    Register Organization
                </button>     
            </div>
        </div>
    </form>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
