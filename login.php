<!DOCTYPE html>

<?php
    session_start();
$logErr = "";
    //connection details
    $servername = "localhost:3328";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "dbo";


$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname) ;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
        
    // Input validation
    $usrErr = $passErr = "";
    $username = $password = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $logErr = "Name and password required.";
        } else {
            $username = test($_POST["name"]);
        }

        if (empty($_POST["pass"])) {
            $logErr = "Name and password required.";
        } else {
            $password = test($_POST["pass"]);
        }
    }

        function test($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


    //$sqls = "SELECT * FROM users WHERE username= '$username'";
    //$result = mysqli_query($conn, $sqls);

    //$row = mysqli_fetch_assoc($result); 

    $stmtse = $conn->prepare("SELECT * FROM users WHERE username = '$username'");
    $stmtse->execute();
    $result = $stmtse->get_result();
    $row = $result->fetch_assoc();

    if ($row["username"] == $username &&  $password ){
        $username = $row["username"];
        $_SESSION["username"] = $username;
        header ("Location: profile.php");
        exit();
    }
    $stmtse->close();
    mysqli_close($conn);
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

<body class="main">
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

    <span class="after"></span>


    <div id="log_form" class="col-12 text-center">
        <form action="login.php" method="post">
            Username: <input type="text" name="name">
            <span class="error">*</span>
            <br><br>

            Password: <input type="password" name="pass">
            <span class="error">*</span>
            <br></br>
            <span class="error"><?php echo $logErr?></span>

            <input id="log_btn" type="submit" value="Login">
        </form>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="cookies.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>