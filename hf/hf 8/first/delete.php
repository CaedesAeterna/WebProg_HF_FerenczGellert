<?php
session_start();



if ($_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}


require_once 'config.php';
require_once 'db.php';



$id = $_GET['id'];

$sql = "delete from hallgatok where id=$id";

if ($db->query($sql)) {

    echo "sikeres";
    header("location: index.php");

} else {
    die("Hiba: " . $db->error);
}






?>