<?php
session_start();
$username = $_SESSION["username"];
if(isset($_SESSION["username"])) {
    session_unset();
    session_destroy();
    }
header("Location:login.php");
?>