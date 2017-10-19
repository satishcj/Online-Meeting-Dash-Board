<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
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
                    <li role="presentation"><a href="login.php"><strong>Sign In</strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-0 cleft">
                <div>
                    <iframe width="560" height="315" allowfullscreen="" frameborder="0" src="vid1.mp4"></iframe>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-1 cright">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                    <h4 class="h2panel">CREATE NEW ACCOUNT</h4>
                    <div class="panel-body">
                        <form action="includes/signup.inc.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" name="firstname" placeholder="Firstname">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="lastname" placeholder="Lastname">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="tel" name="phone" placeholder="Phone Number">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" placeholder="E-Mail">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="pwd" placeholder="Create Password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="password" name="rpwd" placeholder="Re-enter Password">
                            </div>
                            <div class="form-group">
                                <h5 style="color: red">
                                    <?php
                                        if (isset($_SESSION['res2']))
                                        {
                                            $temp=$_SESSION['res2'];
                                            echo "$temp";
                                        }
                                    ?>
                                </h5>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-default btn-primary" type="submit" name="submit"><strong>Signup </strong></button>
                            </div>
                            <div class="form-group"><a href="login.php"><strong>Have an account already? Sign in</strong></a></div>
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