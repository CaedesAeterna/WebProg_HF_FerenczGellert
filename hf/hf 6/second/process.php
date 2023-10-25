<?php

//print_r($_POST);

if (isset($_POST['name'], $_POST['email'], $_POST['password'], $_POST['password2']
    , $_POST['birthdate'], $_POST['gender'])) {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $password2 = htmlspecialchars($_POST['password2']);
    if (($password != $password2)) {
        die('Passwords do not match');

    } elseif (strlen($password) < 8) {
        die('Password must be at least 8 characters');
    } elseif (!preg_match('/[A-Z]/', $password)) {
        die('Password must contain at least one uppercase letter');
    } elseif (!preg_match('/[a-z]/', $password)) {
        die('Password must contain at least one lowercase letter');
    } elseif (!preg_match('/[0-9]/', $password)) {
        die('Password must contain at least one number');
    } elseif (!preg_match('/[^A-Za-z0-9]/', $password)) {
        die('Password must contain at least one special character');
    }
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $gender = htmlspecialchars($_POST['gender']);

    echo 'Name: ' . $name . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Password: ' . $password . '<br>';
    echo 'Password again: ' . $password2 . '<br>';
    echo 'Birthdate: ' . $birthdate . '<br>';
    echo 'Gender: ' . $gender . '<br>';

    if (isset($_POST['interests']) && is_array($_POST['interests'])) {
        echo 'Interests: <br>';
        foreach ($_POST['interests'] as $interest) {
            echo $interest . '<br>';
        }
    }

    if (isset($_POST['countries'])) {
        echo 'Country: ' . $_POST['countries'] . '<br>';
    }


}


