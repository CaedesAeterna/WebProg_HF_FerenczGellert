<?php
session_start();




if ($_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}


require_once 'config.php';
require_once 'db.php';





echo "<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>

    <form  method='post'>
        <input type='text' name='nev'>
        <input type='text' name='szak'>
        <input type='submit'>
    </form>

</body>

</html>";


if ($_POST) {

    $nev = $db->escape_string($_POST['nev']);
    $szak = $db->escape_string($_POST['szak']);

    if (empty($nev) || empty($szak)) {
        die("Hiba: Nincs megadva az adatok");
    }


    $id = $_GET['id'];

    $sql = "update hallgatok set nev='$_POST[nev]', szak='$_POST[szak]' where id=$id";
    $db->query($sql);

    header("location: index.php");

}

?>