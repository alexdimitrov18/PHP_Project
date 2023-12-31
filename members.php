<!DOCTYPE html>

<?php 
    session_start();
    // Assign username
    $username = $_SESSION["username"];
?>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="Images/icon.png" type="image/gif" />
    <!--https://www.facebook.com/starsetonline/photos/a.117729028435153/1217260791815299/-->
    <title>Starset</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Cookie library -->
    <script src="jquery.ihavecookies.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

    <!-- Navigation Bar -->
    <?php if (!empty($_SESSION)){ ?>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="Images/rsz_navbar_logo.png" /></a>
            <!--https://www.logolynx.com/topic/starset#&gid=1&pid=3h-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Origin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item index" href="origin.php">History</a>
                            <a class="dropdown-item index" href="members.php">Members</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="albums.php">Albums<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="privacy_policy.php">Privacy<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><?php echo $username?><span class="sr-only"></span></a>
                    </li>
                </ul>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <?php } if (empty($_SESSION)) { ?>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php"><img src="Images/rsz_navbar_logo.png" /></a>
            <!--https://www.logolynx.com/topic/starset#&gid=1&pid=3h-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Origin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item index" href="origin.php">History</a>
                            <a class="dropdown-item index" href="members.php">Members</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="albums.php">Albums<span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="privacy_policy.php">Privacy<span class="sr-only"></span></a>
                    </li>
                </ul>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <?php } ?>

    <!-- Members list -->
    <div id="hide" class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img class="members" src="Images/dustinb.png" width="250" height="300" />
                <!--
                    https://www.reddit.com/r/Starset/comments/eczstf/anyone_else_agree_dustin_looks_badass_and_intense/
                    -->
                <h3 id="dus" class="names" onmouseover="dustinMouseOver()" onmouseout="dustinMouseOut()">Dustin Bates
                </h3>
            </div>

            <div class="col-md-4 text-center">
                <img class="members" src="Images/brock_richards.jpg" width="250" height="300" />
                <!--
                    https://musicinjection.com.au/2018/06/09/silver-anniversary-of-earth-day-birthday-strikes-gold/0833jpg/
                    -->
                <h3 id="brock" class="names" onmouseover="brockMouseOver()" onmouseout="brockMouseOut()">Brock Richards
                </h3>
            </div>

            <div class="col-md-4 text-center">
                <img class="members" src="Images/rdc.jpg" width="250" height="300" />
                <!-- https://twitter.com/loubrutus/status/1249144556496588801?lang=en -->
                <h3 id="ron" class="names" onmouseover="ronMouseOver()" onmouseout="ronMouseOut()">Ron DeChant</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center">
                <img class="members" src="Images/rsz_adam.png" width="250" height="300" />
                <!-- https://www.pinterest.com/pin/22869910587916284/ -->
                <h3 id="adam" class="names" onmouseover="adamMouseOver()" onmouseout="adamMouseOut()">Adam Gilberd</h3>
            </div>
        </div>
    </div>

    <!-- Dustin Bates profile -->
    <div id="dustinp" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-md-4">
                <img src="Images/dustinb.png" alt="Dustin Bates" width="300" height="350" />
            </div>
            <div class="col-md-6">
                <h1 onmouseover="dusH1MouseOver()" onmouseout="dusH1MouseOut()" id="dajax">Dustin Bates</h1>
                <div id="dustin">
                </div>
                <span class="before"></span>
                <div class="row">
                    <div class="col-md-3 text-center">
                        &nbsp;
                        <p class="contacts">Contacts:</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1 text-center">
                        <a href="https://www.facebook.com/dustin.bates1">
                            <img src="Images/facebook.png" />
                        </a>
                        <!--
                    https://www.flaticon.com/free-icon/facebook_733547?term=facebook&page=1&position=2
                    -->
                    </div>
                    <div class="col-md-1 text-center">
                        <a href="https://twitter.com/dustieboots">
                            <img src="Images/twitter.png" />
                        </a>
                        <!--
                    https://www.flaticon.com/free-icon/twitter_733579?term=twitter&page=1&position=2
                    -->
                    </div>
                    <div class="col-md-1 text-center">
                        <a href="https://www.instagram.com/starsetsingerguy/">
                            <img src="Images/instagram.png" />
                        </a>
                        <!--
                    https://www.flaticon.com/free-icon/instagram_174855?term=instagram&page=1&position=6
                    -->
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <button class="close">×</button>
            </div>
        </div>
    </div>

    <!-- Brock Richards profile -->
    <div id="brockp" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-md-4">
                <img src="Images/brock_richards.jpg" alt="Brock Richards" width="300" height="350" />
            </div>
            <div class="col-md-6">
                <h1 onmouseover="brH1MouseOver()" onmouseout="brH1MouseOut()" id="brajax">Brock Richards</h1>
                <div id="brockr">
                </div>
                <span class="before"></span>
                <div class="row">
                    <div class="col-md-3 text-center">
                        &nbsp;
                        <p class="contacts">Contacts:</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1 text-center">
                        <a href="https://twitter.com/brockr87?lang=en">
                            <img src="Images/twitter.png" />
                        </a>
                        <!--
                            https://www.flaticon.com/free-icon/twitter_733579?term=twitter&page=1&position=2
                            -->
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="https://www.instagram.com/brockrichards/?hl=en">
                            <img src="Images/instagram.png" />
                        </a>
                        <!--
                            https://www.flaticon.com/free-icon/instagram_174855?term=instagram&page=1&position=6
                            -->
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <button class="close">×</button>
            </div>
        </div>
    </div>

    <!-- Ron DeChant profile -->
    <div id="ronp" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-md-4">
                <img src="Images/rdc.jpg" alt="Ron DeChant" width="300" height="350" />
            </div>

            <div class="col-md-6">
                <h1 onmouseover="rdH1MouseOver()" onmouseout="rdH1MouseOut()" id="rajax">Ron DeChant</h1>
                <div id="ronDe">
                </div>
                <span class="before"></span>
                <div class="row">
                    <div class="col-md-3 text-center">
                        &nbsp;
                        <p class="contacts">Contacts:</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1 text-center">
                        <a href="https://www.instagram.com/rondechant/?hl=en">
                            <img src="Images/instagram.png" />
                        </a>
                        <!--https://www.flaticon.com/free-icon/instagram_174855?term=instagram&page=1&position=6-->
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <button class="close">×</button>
            </div>
        </div>
    </div>

    <!-- Adam Gilberd profile -->
    <div id="adamp" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-md-4">
                <img src="Images/adam.jpg" alt="Adam Gilberd" width="300" height="350" />
            </div>

            <div class="col-md-6">
                <h1 onmouseover="agH1MouseOver()" onmouseout="agH1MouseOut()" id="aajax">Adam Gilbert</h1>
                <div id="adamg">
                </div>
                <span class="before"></span>
                <div class="row">
                    <div class="col-md-3 text-center">
                        &nbsp;
                        <p class="contacts">Contacts:</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-1 text-center">
                        <a href="https://www.facebook.com/drumabuseag">
                            <img src="Images/facebook.png" />
                        </a>
                        <!--https://www.flaticon.com/free-icon/facebook_733547?term=facebook&page=1&position=2-->
                    </div>
                    <div class="col-md-2 text-center">
                        <a href="https://twitter.com/drumabuse">
                            <img src="Images/twitter.png" />
                        </a>
                        <!--https://www.flaticon.com/free-icon/twitter_733579?term=twitter&page=1&position=2-->
                    </div>
                    <div class="col-md-1 text-center">
                        <a href="https://www.instagram.com/drumabuse/">
                            <img src="Images/instagram.png" />
                        </a>
                        <!--https://www.flaticon.com/free-icon/instagram_174855?term=instagram&page=1&position=6-->
                    </div>
                </div>
            </div>
            <div class="col-sm-1">
                <button class="close">×</button>
            </div>
        </div>

    </div>

    <span class="after"></span>


    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="cookies.js"></script>
</body>

</html>