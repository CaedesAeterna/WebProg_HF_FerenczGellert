<?php
session_start();


if (isset($_SESSION['num'])) {



    if (isset($_POST['talalgatas'])) {
        $talalgatas = htmlspecialchars($_POST['talalgatas']);


        if ($talalgatas > $_SESSION['num']) {
            echo "Kisebbet tippelj" . "<br>";
        } else if ($talalgatas < $_SESSION['num']) {
            echo "Nagyobbat tippelj" . "<br>";

        } else {

            echo "Megtaláltad a szám : " . $_SESSION['num'] . "<br>";

            $_SESSION['num'] = rand(0, 10);

        }


    }


    echo '<a href="form.html"> Ujra </a>';

} else {

    $_SESSION['num'] = rand(0, 10);

}

//$flag = false;


//$num = rand(0, 10);








