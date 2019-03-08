<?php
session_start();
$_SESSION['message'] = '';
$mysqli = new mysqli('localhost', 'root', '', 'users');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if ($_POST['password'] == $_POST['confirmpassword']) {

    $user_first = $mysqli->real_escape_string($_POST['first']);
    $user_last = $mysqli->real_escape_string($_POST['last']);
    $user_email= $mysqli->real_escape_string($_POST['email']);
    $user_uid = $mysqli->real_escape_string($_POST['first']);
    $user_pwd = md5($_POST['password']);


    $_SESSION['first'] = $user_first;
    $_SESSION['last'] = $user_last;
    $_SESSION['email'] = $user_email;
    $_SESSION['first'] = $user_uid;
    $_SESSION['password'] = $user_pwd;

    $sql = "INSERT INTO users (first, last, email, first, password)" . "VALUES ('$user_first', '$user_last', '$user_email', '$user_uid', '$user_pwd')";
    if ($mysql->query($sql) == true) {
        $_SESSION['message'] = 'Registration successful! Added $user_uid to the database!';
        header("location: index.html");
    }


}
}

?>

<!doctype html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PK-CHANOCH</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link href="style.css" rel="stylesheet" type="text/css" media="all"/>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css"> -->


        <!--For Plugins external css-->
        <link rel="stylesheet" href="assets/css/plugins.css" />
        <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

        <!--Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">

        <!--Theme Responsive css-->
        <link rel="styleheet" href="assets/css/responsive.css"/>

        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script> 

        <script language="JavaScript" src="assets\js\vendor\gen_validatorv31.js" type="text/javascript"></script>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
</head>
<body>
        <section id="social" class="social">
            <div class="container">
                <!-- Example row of columns -->
                <div class="row">
                    <div class="social-wrapper">
                        <div class="col-md-6">
                            <div class="social-icon">
                                <a href="http://www.Facebook.com/pkchanoch"><i class="fa fa-facebook"></i></a>
                                <a href="http://twitter.com"><i class="fa fa-twitter"></i></a> 
                                <a href="http://google+.com"><i class="fa fa-google-plus"></i></a>
                                <a href="http://linkedin.com"><i class="fa fa-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-contact">
                                <a href=""><i class="fa fa-phone"></i>+233 540736077</a>
                                <a href="http://gmail.com"><i class="fa fa-envelope"></i>pkchanoch@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /container -->       
        </section>
         <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="assets/images/PKCHANOCH.png" alt="Logo" /></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="#features">PRODUCT</a></li>
                        <li><a href="#service">Service</a></li>
                        <li><a href="#price">PRICE</a></li>
                        <li><a href="#business">Business</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        
    <div class="profile">
        <div class="wrap">
            <div class="w3layouts-top-grids">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="w3ls-subscribe">
                                    <div class="agileits-border">
                                        <h4>New Customer?</h4>
                                        <p>Nunc nec libero et velit dapibus auctor. Etiam vitae condimentum leo, in dapibus lacus.</p>
                                        <form action="signup.php" method="POST">
                                            <input type="text" name="first" placeholder="First Name" required="">
                                            <input type="text" name="last" placeholder="Last Name" required="">
                                            <input type="email" name="email" placeholder="Email" required="">
                                            <input type="password" name="password" placeholder="Password" required="">
                                            <input type="password" name="confirmpassword" placeholder="Confirm Password" required="">
                                            <input name="submit" type="submit" value="Sign Up">
                                        </form>
                                    </div>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                    <div class="clear"> </div>
                </div>
            </div>
        </div>

        
<footer id="footer" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-wrapper">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="footer-brand">
                                <img src="assets/images/standby.png" alt="logo" />
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="copyright">
                                <p>Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://pkchanoch.com"> PK-CHANOCH </a>2018. All rights reserved.</p>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        
        
        <div class="scrollup">
            <a href="#"><i class="fa fa-chevron-up"></i></a>
        </div>


        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
    </html>