<?php

session_start();

require_once 'config.php';
require_once 'db.php';


if ($_POST) {
    if (isset($_POST['name']) && isset($_POST['password'])) {
        $name = htmlspecialchars($_POST['name']);
        $password = htmlspecialchars($_POST['password']);
    }

}

$name = $db->escape_string($name);
$password = $db->escape_string($password);


if (empty($name) || empty($password)) {
    die("Hiba: Nincs megadva az adatok");
}

$sql = "select * from users where name = '$name' and password = '$password'";

$result = $db->query($sql);

if ($result->num_rows > 0) {
    header("location: index.php");


    $_SESSION['loggedin'] = true;
    echo "sikeres";

} else {
    die("Error: Wrong username or password " );
}




?>