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

    <span class="before"></span>

    <div id="hidea" class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img class="albums" src="Images/transmissions.jpg" width="250" height="300" />
                <h3 id="tra" class="albums" onmouseover="traMouseOver()" onmouseout="traMouseOut()">
                    Transmissions
                </h3>
            </div>

            <div class="col-md-4 text-center">
                <img class="albums" src="Images/vessels.jpg" width="250" height="300" />
                <h3 id="ves" class="albums" onmouseover="vesMouseOver()" onmouseout="vesMouseOut()">
                    Vessels
                </h3>
            </div>

            <div class="col-md-4 text-center">
                <img class="albums" src="Images/divisions.jpg" width="250" height="300" />
                <h3 id="divi" class="albums" onmouseover="divMouseOver()" onmouseout="divMouseOut()">
                    Divisions
                </h3>
            </div>
        </div>
    </div>

    <div id="tran" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-sm-1">
                <button class="closea">×</button>
            </div>
            <div class="col-md-4">
                <img src="Images/transmissions.jpg" alt="Transmissions" width="300" height="350" />
                <button id="btnTRD" class="album_btns">Release date▿</button>
                <p id="traRD"></p>
                <button id="btnTDRD" class="album_btns">Deluxe edition release date▿</button>
                <p id="traDERD"></p>
            </div>
            <div class="col-md-6">
                <h1>Transmissions</h1>
                <button id="btnTM" class="album_btns">Album meaning▿</button>
                &nbsp;
                <p id="traM"></p>
                <button id="btnTS" class="album_btns">Album songs▿</button>
                &nbsp;
                <p id="traS"></p>
            </div>
        </div>
    </div>

    <div id="vesa" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-sm-1">
                <button class="closea">×</button>
            </div>
            <div class="col-md-4">
                <img src="Images/vessels.jpg" alt="Vessels" width="300" height="350" />
                <button id="btnVRD" class="album_btns">Release date▿</button>
                <p id="vesRD"></p>
                <button id="btnVDRD" class="album_btns">Deluxe edition release date▿</button>
                <p id="vesDERD"></p>
            </div>
            <div class="col-md-6">
                <h1>Vessels</h1>
                <button id="btnVM" class="album_btns">Album meaning▿</button>
                &nbsp;
                <p id="vesM"></p>
                <button id="btnVS" class="album_btns">Album songs▿</button>
                &nbsp;
                <p id="vesS"></p>
            </div>
        </div>
    </div>

    <div id="diva" class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-sm-1">
                <button class="closea">×</button>
            </div>
            <div class="col-md-4">
                <img src="Images/divisions.jpg" alt="Divisions" width="300" height="350" />
                <button id="btnDRD" class="album_btns">Release date▿</button>
                <p id="divRD"></p>
            </div>
            <div class="col-md-6">
                <h1>Divisions</h1>
                <button id="btnDM" class="album_btns">Album meaning▿</button>
                &nbsp;
                <p id="divM"></p>
                <button id="btnDS" class="album_btns">Album songs▿</button>
                &nbsp;
                <p id="divS"></p>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="cookies.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>