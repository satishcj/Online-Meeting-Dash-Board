<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.set1.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>ONLINE MEETING PORTAL</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#"><strong>
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
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><strong>More </strong><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="#"><strong>Help </strong></a></li>
                            <li role="presentation"><a href="set1.php"><strong>Settings</strong></a></li>
                            <li role="presentation"><a href="includes/logout.inc.php"><strong>Logout</strong></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default panel-left">
                    <div class="panel-heading"></div>
                    <h3 class="lead-left"><strong>SETTINGS </strong></h3>
                    <div class="panel-body">
                        <div class="div-left"><a href="set1.php" class="link-left"><strong>Your Personal Info</strong></a></div>
                        <div class="div-left"><a href="set2.php" class="link-left"><strong>Security </strong></a></div>
                        <div class="div-left"><a href="set3.php" class="link-left"><strong>Connected Accounts</strong></a></div>
                        <div class="div-left"><a href="set4.php" class="link-left"><strong>Privacy Settings</strong></a></div>
                        <div class="div-left"><a href="set5.php" class="link-left"><strong>Delete Account</strong></a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1">
                <div class="panel panel-default panel-right">
                    <div class="panel-heading"></div>
                    <h1 class="lead-right"><strong>Your Personal Info</strong></h1>
                    <div class="panel-body">
                        <div class="div-right">
                            <div class="row row-right">
                                <div class="col-md-3 col-md-offset-0 col-inf-r">
                                    <h4 class="text-left"><strong>First Name:</strong></h4></div>
                                <div class="col-md-3 col-inf-r">
                                    <h4 class="text-left">User Firstname</h4></div>
                                <div class="col-md-6">
                                    <form action="includes/set1.inc1.php" method="POST">
                                        <div class="col-md-8 input-col col-inf-r">
                                            <input class="form-control" type="text" placeholder="New Last Name">
                                        </div>
                                        <div class="col-md-2 col-inf-r">
                                            <button class="btn btn-default" type="button">Change </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row row-right">
                                <div class="col-md-3 col-md-offset-0 col-inf-r">
                                    <h4 class="text-left"><strong>Last Name:</strong></h4></div>
                                <div class="col-md-3 col-inf-r">
                                    <h4 class="text-left">User Lastname</h4></div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="col-md-8 input-col col-inf-r">
                                            <input class="form-control" type="text" placeholder="New Last Name">
                                        </div>
                                        <div class="col-md-2 col-inf-r">
                                            <button class="btn btn-default" type="button">Change </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row row-right">
                                <div class="col-md-3 col-md-offset-0 col-inf-r">
                                    <h4 class="text-left"><strong>E-Mail </strong></h4></div>
                                <div class="col-md-3 col-inf-r">
                                    <h4 class="text-left">User E-Mail</h4></div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="col-md-8 input-col col-inf-r">
                                            <input class="form-control" type="email" placeholder="New E-Mail">
                                        </div>
                                        <div class="col-md-2 col-inf-r">
                                            <button class="btn btn-default" type="button">Change </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="row row-right">
                                <div class="col-md-3 col-md-offset-0 col-inf-r">
                                    <h4 class="text-left"><strong>Phone </strong></h4></div>
                                <div class="col-md-3 col-inf-r">
                                    <h4 class="text-left">User Phone</h4></div>
                                <div class="col-md-6">
                                    <form>
                                        <div class="col-md-8 input-col col-inf-r">
                                            <input class="form-control" type="tel" placeholder="New Number">
                                        </div>
                                        <div class="col-md-2 col-inf-r">
                                            <button class="btn btn-default" type="button">Change </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>