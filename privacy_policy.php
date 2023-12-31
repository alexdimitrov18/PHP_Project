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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <title>Starset</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Cookie library -->
    <script src="jquery.ihavecookies.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>

<body>

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

    <span class="after"></span>
    <br></br>

    <div class="container">
        <div class="row">
            <div class="col-md-2">
                &nbsp;
            </div>
            <div class="col-md-8">
                <table class="policy">
                    <tr class="top">
                        <td class="left"></td>
                        <td class="middle hide_mid">
                            <h3 class="priv_title">STARSET PRIVACY POLICY</h3>
                        </td>
                        <td class="middle_space"></td>
                        <td class="middle_2 hide_mid"></td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="main_tbl">
                        <td class="left"></td>
                        <td class="middle">
                            <img class="priv_img" src="Images/user.png" alt="User icon" />
                            <!-- https://www.flaticon.com/free-icon/user_1077114 -->
                            <p id="usr">If you sign up to use this website's services, we may keep personal information about
                                <span class="emphasis">you</span>. This will include your name, email and date of birth.
                            </p>
                        </td>
                        <td class="middle_space"></td>
                        <td class="middle_2 merged" rowspan="5">
                            <img id="seal" src="Images/ePrivacyseal_EU_F_01.svg" alt="Privacy seal"></img>
                        </td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="main_tbl">
                        <td class="left"></td>
                        <td class="middle">
                            <img class="priv_img" src="Images/megaphone.png" alt="Ad icon" />
                            <!-- https://www.flaticon.com/free-icon/megaphone_596041 -->
                            <p>We would like to use <span class="emphasis">your</span> information to provide better ads
                                to <span class="emphasis">you</span> from 3rd parties.
                            </p>
                        </td>
                        <td class="middle_space"></td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="main_tbl">
                        <td class="left"></td>
                        <td class="middle">
                            <img class="priv_img" src="Images/browser.png" alt="Web page icon" />
                            <!-- https://www.flaticon.com/free-icon/browser_3022253 -->
                            <p>We would like to collect all information of visited pages to help us identify the most
                                popular ones.
                            </p>
                        </td>
                        <td class="middle_space"></td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="main_tbl">
                        <td class="left"></td>
                        <td class="middle">
                            <img class="priv_img" src="Images/question.png" alt="Questions icon" />
                            <!-- https://www.flaticon.com/free-icon/question_2476190 -->
                            <p>In case of any questions or comments regarding the privacy policy, or the data we are
                                collecting, please email privacy@website.com
                            </p>
                        </td>
                        <td class="middle_space"></td>
                        <td class="middle_2 merged" rowspan="3">
                            <p>Personal information is kept to provide better experience while using our website. <span
                                    class="emphasis">Your</span> information will be deleted if you do not use this
                                website for a year.</p>
                        </td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="main_tbl">
                        <td class="left"></td>
                        <td class="middle">
                            <img class="priv_img" src="Images/secure.png" alt="Security icon" />
                            <!-- https://www.flaticon.com/free-icon/secure_95454 -->
                            <p><span class="emphasis">Your</span> data is stored safely and securely. If we do have a
                                breach of our collected date, we will be fined by the Information Commissioner.
                            </p>
                        </td>
                        <td class="middle_space"></td>
                        <td class="right"></td>
                    </tr>
                    <tr class="space"></tr>
                    <tr class="bottom">
                        <td class="left"></td>
                        <td class="middle hide_mid"></td>
                        <td class="middle_space"></td>
                        <td class="middle_2 hide_mid"></td>
                        <td class="right"></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-2">
                &nbsp;
            </div>
        </div>
    </div>
    <br></br>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="cookies.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>