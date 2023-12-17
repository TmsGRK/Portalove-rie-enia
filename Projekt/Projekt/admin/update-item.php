<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";

use Projekt\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "projekt");

//$_GET, $_POST, $_SESSION,$_COOKIE, $_SERVER, $_REQUEST, $_ENV, $_FILE
if(isset($_POST['submit'])) {
    $udpate = $db->updateMenuItem($_POST['id'], $_POST['name'], $_POST['url']);

    if($udpate) {
        header("Location: home.php?status=5");
    } else {
        header("Location: home.php?status=6");
    }
} else {
    header("Location: home.php");
}