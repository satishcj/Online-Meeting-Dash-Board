<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Settings</title>
    <link rel="stylesheet" href="assets/semanticui/semantic.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/styles.set1.css">
</head>

<body>
    <header>
        <div>
            <div class="ui top secondary pointing hidden menu stackable">
                <a class="item">
                    <img class="ui avatar image" src="assets/feather/zap.svg">
                    <strong>ONLINE MEETING PORTAL</strong>
                </a>
                <div class="right menu">
                    <a class="ui item" href="home.php">
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
                    <a class="active item" href="set1.php">
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
        

        <div class="ui stackable grid container">
            <div class="row">

                <div class="four wide column">
                    <div class="ui inverted vertical pointing menu large">
                        <a class="item" href="set1.php">
                            PERSONAL INFO
                        </a>
                        <a class="item" href="set2.php">
                            SECURITY SETTINGS
                        </a>
                        <a class="item" href="set3.php">
                            CONNECTED ACCOUNTS
                        </a>
                        <a class="item active" href="set4.php">
                            PRIVACY SETTINGS
                        </a>
                        <a class="item" href="set5.php">
                            DELETE ACCOUNT
                        </a>
                    </div>
                </div>

                <div class="ten wide column grid ui large grid">
                    
                    <div class="row">
                        <div class="column">
                            <h3 class="ui horizontal divider header">
                                <i class="protect icon"></i>
                                Privacy Settings
                            </h3>
                        </div>
                    </div>


                    <div class="row">
                        
                        <div class="column">
                            <h4 class="ui">
                                <?php
                                    if (isset($_SESSION['sres4']))
                                    {
                                        $temp=$_SESSION['sres4'];
                                        echo "$temp";
                                    }
                                ?>
                            </h4>
                        </div>
                            
                    </div>
                </div>

            </div>
        </div>
    
    </header>

</body>
</html>