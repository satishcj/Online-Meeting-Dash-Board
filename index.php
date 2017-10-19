<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A layout example that shows off a responsive product landing page.">
    <title>Landing Page</title>
    
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/marketing.css">
    
</head>

<body>
<div class="header">
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed">
        <a class="pure-menu-heading" href="">ONLINE MEETING PORTAL</a>

            <ul class="pure-menu-list">
            <li class="pure-menu-item"><a href="login.php" class="pure-menu-link">Sign In</a></li>
            <li class="pure-menu-item"><a href="signup.php" class="pure-menu-link">Sign Up</a></li>
        </ul>
    </div>
</div>

<div class="splash-container">
    <div class="splash">
        <h1 class="splash-head">#W O R K H A R D<br>A N Y W H E R E</h1>
        <p class="splash-subhead">
            Breaking limits in the way of meetings
        </p>
        <p>
            <a href="signup.php" class="pure-button pure-button-primary">Get Started</a>
        </p>
    </div>
</div>

<div class="content-wrapper">
    <div class="content">
        <h2 class="content-head is-center">Why Choose Us?</h2>

        <div class="pure-g">
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">

                <h3 class="content-subhead">
                    <i class="fa fa-rocket"></i>
                    Get Started Quickly
                </h3>
                <p>
                    Just join and start your meeting without any boundaries or formalities.	Create schedules and appointments, notify other members and much more!
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-mobile"></i>
                    Responsive Layouts
                </h3>
                <p>
                    Our website is customized for mobile and tablet views. So no matter where you are, or what device you use, we're just a click away!
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-th-large"></i>
                    Modular
                </h3>
                <p>
                    Our website is divided into various modules to help you get started easily and provide better accessibility to the users.
                </p>
            </div>
            <div class="l-box pure-u-1 pure-u-md-1-2 pure-u-lg-1-4">
                <h3 class="content-subhead">
                    <i class="fa fa-check-square-o"></i>
                    Smooth and Prompt
                </h3>
                <p>
                    Response time is very less and our site loads before you know it!
                </p>
            </div>
        </div>
    </div>

    <div class="ribbon l-box-lrg pure-g">
        <div class="l-box-lrg is-center pure-u-1 pure-u-md-1-2 pure-u-lg-2-5">
            <img width="300" alt="File Icons" class="pure-img-responsive" src="assets/img/file-icons.png">
        </div>
        <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-3-5">

            <h2 class="content-head content-head-ribbon">Standard File Type Upload/Download</h2>

            <p>
                We support standard file types like PDF, DOC, DOCX, XLS, etc. We are committed to provide a great user experiance and use the latest tech for the betterment of our website!
            </p>
        </div>
    </div>

    <div class="content">
        <h2 class="content-head is-center">ABOUT US</h2>

        <div class="pure-g">
            

            <div class="l-box-lrg pure-u-1 pure-u-md-3-5">
                <h4>Developing Team</h4>
                <p>
                    We're a team of 3 developers:<br>
                    Dipanjan | Phone: +91-8013758776 | E-Mail:dipanjan131@gmail.com<br>
                    Arup | Phone: +91-9564042769 | E-Mail:arupkbiswas023@gmail.com<br>
                    Venkatesh | Phone: +91-9342120091 | E-Mail:kakalwarvenkatesh94@gmail.com<br>
                </p>

                <h4>More Information</h4>
                <p>
                    This website along with all its components is a part of project for the subject "Software Engineering" in First Semester of Masters Degree Course in Computer Science and Engineering, VIT University
                </p>
            </div>
        </div>

    </div>

    <div class="footer l-box is-center">
        © Copyright VIT University
    </div>

</div>

</body>
</html>
