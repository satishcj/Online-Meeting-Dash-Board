<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
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
                        <a class="item" href="set4.php">
                            PRIVACY SETTINGS
                        </a>
                        <a class="item active" href="set5.php">
                            DELETE ACCOUNT
                        </a>
                    </div>
                </div>

                <div class="ten wide column grid ui large grid">
                    
                    <div class="row">
                        <div class="column">
                            <h3 class="ui horizontal divider header">
                                <i class="remove circle icon"></i>
                                Delete Your Account
                            </h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <h4 class="ui">
                                Please select an option from down below
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column input">
                            <select class="ui dropdown">
                                <option value="">Select Reason</option>
                                <option value="">I don't like this anymore</option>
                                <option value="">This website is time consuming</option>
                                <option value="">I don't find this service useful</option>
                                <option value="">The website is slow and lags a lot</option>
                                <option value="">I don't like the interface of the website</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <h4 class="ui">
                                Please enter your password
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column input">
                            <div class="ui input">
                                <input type="password" name="opass" placeholder="Enter Your Password">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column input">
                            <div class="ui slider checkbox">
                                <input type="checkbox" name="newsletter">
                                <label>I understand that all my information would be permanently deleted and this processes can't be reversed under any circumstances</label>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column input">
                            <button class="negative ui button">Delete My Account Permanently</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="column">
                            <h4 class="ui">
                                <?php
                                    if (isset($_SESSION['sres5']))
                                    {
                                        $temp=$_SESSION['sres5'];
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