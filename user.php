<?php
session_start();
if (isset($_SESSION['id'])) {

    $uid = $_SESSION['id'];
    $usname = $_SESSION['username'];
    header("Location: home.php");
} else {
    header("Location: index.php");
}
?>