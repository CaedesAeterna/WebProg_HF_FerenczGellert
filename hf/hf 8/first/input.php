<?php
session_start();



if ($_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}


require_once 'config.php';
require_once 'db.php';




if ($_POST) {
    $nev = htmlspecialchars($_POST['nev']);
    $szak = htmlspecialchars($_POST['szak']);

}


$nev = $db->escape_string($nev);
$szak = $db->escape_string($szak);


if (empty($nev) || empty($szak)) {
    die("Hiba: Nincs megadva az adatok");
}


$insertSql = "INSERT INTO hallgatok (nev, szak) VALUES ( '$nev', '$szak');";

if ($db->query($insertSql)) {
    echo "sikeres";
    header("location: index.php");

} else {
    die("Hiba: " . $db->error);
}





?>