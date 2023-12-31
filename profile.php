<!DOCTYPE html>

<?php 
    // Start Session
    session_start();

    // Assign username
    $username = $_SESSION["username"];

    // Kick out if user is not logged in
    if(empty($_SESSION)){
        header("Location: login.php");
    }

    //connection details
    $servername = "localhost:3328";
    $dbusername = "root";
    $dbpassword = "root";
    $dbname = "dbo";



$conn = mysqli_connect($servername, $dbusername, $dbpassword , $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Variables for data input
    $nameErr = $emailErr = $genderErr = $dateErr = "";
    $name = $email = $gender = $comment = $date = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = test($_POST["name"]);

        $email = test($_POST["email"]);

        $date = test($_POST["bday"]);

        $gender = test($_POST["gender"]);

        $comment = test($_POST["comment"]);
    }

    function test($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


    if(array_key_exists('submit', $_POST)) { 

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        }

        if (empty($_POST["bday"])) {
            $dateErr = "Date is required";
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        }

        

        if (!empty($name) && !empty($email) && !empty($date) && !empty($gender)) {
            $stmtin = $conn->prepare("INSERT INTO userInfo (ID, userName, eMail, birthDate, gender, comment) VALUES (?, ?, ?, ?, ?, ?)");
            $stmtin->bind_param("ssssss", $username, $name, $email, $date, $gender, $comment);

            $stmtin->execute();
            $stmtin->close();
        }
    } 

   else if(array_key_exists('showdata', $_POST) or true ) { 

        $stmtse = $conn->prepare("SELECT * FROM userInfo WHERE ID = '$username'");
        $stmtse->execute();
        $result = $stmtse->get_result();

        $row = $result->fetch_assoc();

        if ($row["ID"] == $username){
            $sname = $row["userName"];
            $smail = $row["eMail"];
            $sdate = $row["birthDate"];
            $sgender = $row["gender"];
            $scomment = $row["comment"];
        } else {
        }
        $stmtse->close();
    } 

    else if (array_key_exists('delete', $_POST)) {

        $stmtde = "DELETE FROM userInfo WHERE ID = '$username'";
        $result = $conn->prepare($stmtde);
        $result->execute();
    }

    else if (array_key_exists('update', $_POST)) {
        if (!empty($_POST["name"])) {
            $stmtup = $conn->prepare("UPDATE userInfo SET userName=? WHERE ID = '$username'");
            $stmtup->bind_param("s", $name);

            $stmtup->execute();
            $stmtup->close();
        }

        if (!empty($_POST["email"])) {
            $stmtup = $conn->prepare("UPDATE userInfo SET eMail=? WHERE ID = '$username'");
            $stmtup->bind_param("s", $email);

            $stmtup->execute();
            $stmtup->close();
        }

        if (!empty($_POST["bday"])) {
            $stmtup = $conn->prepare("UPDATE userInfo SET birthDate=? WHERE ID = '$username'");
            $stmtup->bind_param("s", $date);

            $stmtup->execute();
            $stmtup->close();
        }

        if (!empty($_POST["gender"])) {
            $stmtup = $conn->prepare("UPDATE userInfo SET gender=? WHERE ID = '$username'");
            $stmtup->bind_param("s", $gender);

            $stmtup->execute();
            $stmtup->close();
        }

        if (!empty($_POST["comment"])) {
            $stmtup = $conn->prepare("UPDATE userInfo SET comment=? WHERE ID = '$username'");
            $stmtup->bind_param("s", $comment);

            $stmtup->execute();
            $stmtup->close();
        }
    }

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

<body>
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

    <span class="after"></span>

    <div class="container">
        <span class="before"></span>
        <div class="row">
            <div class="col-md-6">
                <h1>Welcome <?php echo $username ?></h1>
                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    Name: <input type="text" name="name">
                    <span class="error">*<?php echo $nameErr?></span>
                    <br><br>
                    E-mail: <input type="text" name="email">
                    <span class="error">*<?php echo $emailErr?></span>
                    <br><br>
                    Date of birth: <input type="date" name="bday">
                    <span class="error">*<?php echo $dateErr?></span>
                    <br><br>
                    Gender:
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                    <span class="error">*<?php echo $genderErr?></span>
                    <br><br>
                    Comment: <textarea name="comment" rows="5" cols="40"></textarea>
                    <br><br>
                    <input type="submit" name="submit" value="Submit">
                    &nbsp;
                    <input type="submit" name="delete" value="Delete">
                    &nbsp;
                    <input type="submit" name="showdata" value="Show Data">
                    &nbsp;
                    <input type="submit" name="update" value="Update">
                </form>
                <span class="before"></span>
            </div>
            <div class="col-md-6">
                <h1>User's data:</h1>
                <div class="data">
                   
                    <?php
                    echo  "Name: " . $sname . "<br>";
                    echo "Email: " . $smail . "<br>";
                    echo "Date of birth: " . $sdate . "<br>";
                    echo "Gender: " . $sgender . "<br>";
                    echo "Comment: " . $scomment;
                    ?>
                </div>
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