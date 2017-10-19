<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>ONLINE MEETING PORTAL</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="#"><strong>Help </strong></a></li>
                    <li role="presentation"><a href="signup.php"><strong>Sign Up</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-0 cleft">
                <div>
                    <h1 class="motto"><strong># W O R K H A R D</strong></h1>
                    <h1 class="motto"><strong>A N Y W H E R E</strong></h1>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 cright">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <h4 class="h2panel">SIGN IN</h4>
                    <div class="panel-body">
                        <form action="includes/login.inc.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="pwd" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <h5 style="color: red">
                                    <?php
                                        if (isset($_SESSION['res1']))
                                        {
                                            $temp=$_SESSION['res1'];
                                            echo "$temp";
                                        }
                                    ?>
                                </h5>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default btn-primary" type="submit" name="submit">Sign In</button>
                            </div>
                            <div class="form-group"><a href="signup.php"><strong>Don't have an account yet? Sign Up</strong></a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
