<?php
session_start();

if ($_SESSION['loggedin'] != true) {
    header("location: login.html");
    exit;
}


require_once 'config.php';
require_once 'db.php';

$sql = "SELECT * FROM `hallgatok`;";


$rs = $db->query($sql);

echo "<table border='1'>";

echo "<tr> <td>id</td> <td>nev</td> <td>szak</td> <td>update</td> <td>delete</td> </tr>";


while ($row = $rs->fetch_assoc()) {

    echo
        "<tr>
    <td>" . $row["id"] . "</td> <td> " . $row["nev"] . "</td> <td> " . $row["szak"] . "</td>
    <td> <a href='update.php?id=" . $row["id"] . "'>Update</a> </td>
    <td> <a href='delete.php?id=" . $row["id"] . "'>Delete</a> </td>

    </tr>";

}

echo "</table>";

echo "<a href='index.html'>Add</a>" . "<br>";
echo "<a href='logout.php'>Logout</a>";





?>