<?php

// first----------

function first()
{
    $array = array(5, '5', '05', 12.3, '16.7', 'five', 0xDECAFBAD, '10e200');

    for ($i = 0; $i < sizeof($array); $i++) {

        if (is_numeric($array[$i])) {
            echo 'Yes ';
        } else {
            echo 'No ';
        }
        echo gettype($array[$i]) . "<br>";
    }

}

first();

// second----------

function second()
{
    $second = 2489;

    if (is_int($second)) {
        $hour = $second / 3600;
        $formattedHour = number_format($hour, 2);
        echo "This amounts to $formattedHour hour";

    } else {
        echo "Not an int";
    }

}

second();


// third----------

function third($firstNum, $secondNum)
{


    $add = $firstNum + $secondNum;
    $sub = $firstNum - $secondNum;
    $multiply = $firstNum * $secondNum;
    $divide = $firstNum / $secondNum;
    $exp = $firstNum ** $secondNum;

    echo "Addition: $add <br>";
    echo "Subtraction: $sub <br>";
    echo "Multiplication: $multiply <br>";
    echo "Divison: $divide <br>";
    echo "Exponential: $exp <br>";

}

third(3, 4);

// fourth----------

function fourth($size)
{
    $white = <<<DOC
    <div style='height: 20px;width: 20px;background-color:white;
    display: inline-block'></div>
    DOC;
    $black = <<<DOC
    <div style='height: 20px;width: 20px;background-color:black;
    display: inline-block'></div>
    DOC;

    for ($i = 0; $i <= $size; $i++) {
        for ($j = 0; $j <= $size; $j++) {
            if (($i + $j) % 2 == 0) {
                echo "$white";

            } else {
                echo "$black";

            }

        }
        echo "<br>";
    }

}

fourth(8);


// fifth----------

function fifth($number1, $number2, $operation)
{
    switch ($operation) {
        case "+":
            echo "Additon: " . $number1 + $number2 . "<br>";
            break;
        case "-":
            echo "Subtraction: " . $number1 - $number2 . "<br>";
            break;
        case "*":
            echo "Multiplication: " . $number1 * $number2 . "<br>";
            break;
        case "/":
            if ($number2 == 0) {
                echo "Dividing by zero" . "<br>";
                break;
            }
            echo "Division: " . $number1 / $number2 . "<br>";
            break;
        default:
            echo "Invalid operation <br>";
    }


}

fifth(3, 5, "+");
fifth(3, 5, "-");
fifth(3, 0, "/");
fifth(3, 5, "*s");

// sixth----------

function sixth($month)
{
    switch ($month) {
        case "December":
        case "January":
        case "February":
            echo "Winter" . "<br>";
            break;
        case "March":
        case "April":
        case "May":
            echo "Spring" . "<br>";
            break;
        case "June":
        case "Julius":
        case "Augustus":
            echo "Summer" . "<br>";
            break;
        case "September":
        case "October":
        case "November":
            echo "Fall" . "<br>";
            break;
        default:
            echo "Invalid month <br>";
    }

}

sixth("January");
sixth("December");
sixth("June");