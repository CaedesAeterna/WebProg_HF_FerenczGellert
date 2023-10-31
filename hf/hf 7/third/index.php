<?php
session_start();

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}

/*
if ($_POST) {
    if (isset($_POST['destroy'])) {
        destroySession();
    }


}

*/
/**
 * This function destroys the current session and removes any session cookie.
 */
function destroySession()
{
    // Destroy the session
    session_destroy();

    // Clear the $_SESSION array
    $_SESSION = [];

    // Check if a session cookie exists
    if (isset($_COOKIE[session_name()])) {
        // If a session cookie exists, delete it
        setcookie(session_name(), '', time() - 42000, '/');
    }
}


?>

<!DOCTYPE html>
<html>

<head>
    <title>Látogatás Számláló</title>
</head>

<body>
    <h1>Weboldal Látogatás Számláló</h1>

    <?php
    if (isset($_SESSION['counter'])) {
        echo 'Az aktuális számláló: ' . $_SESSION['counter'];
    } else {
        echo 'Az aktuális számláló: 0';
    }
    echo '<br>';
    ?>


    <form method="post">
        <input type="submit" name="destroy" value="Destroy session">
    </form>

</body>

</html>