<?php


//first//$color = 'yellowgreen';
//
//$tableCreate = function ($number) use ($color) {
//    echo "<table style='text-align: center;border: 1px solid'>";
//    for ($i = 1; $i <= $number; $i++) {
//        echo "<tr>";
//        for ($j = 1; $j <= $number; $j++) {
//            if ($i == $j) {
//                echo "<td style='width: 30px; height: 30px;border: 1px solid;
//                background-color: $color;'>";
//                echo $i * $j;
//                echo "</td>";
//
//            } else {
//                echo "<td style='width: 30px; height: 30px;border: 1px solid;
//                background-color: white';>";
//                echo $i * $j;
//                echo "</td>";
//            }
//
//        }
//        echo "</tr>";
//
//    }
//    echo "</table>";
//
//};
//$tableCreate(7);



//second

//$orszagok = array(" Magyarország " => " Budapest",
//    " Románia" => " Bukarest",
//    "Belgium" => "Brussels", "Austria" => "Vienna",
//    "Poland" => "Warsaw");
//foreach ($orszagok as $key => $item) {
//    echo "The capital of $key" . ' is ' . "<span style=
//    'color: red'>" . $item . '</span>' . '<br>';
//
//}

//third

//$napok = array(
//    "HU" => array("H", "K", "Sze", "Cs", "P", "Szo", "V"),
//    "EN" => array("M", "Tu", "W", "Th", "F", "Sa", "Su"),
//    "DE" => array("Mo", "Di", "Mi", "Do", "F", "Sa", "So"),
//);
//
//
//foreach ($napok as $item) {
//    $counter = 0;
//    foreach ($item as $day) {
//        $counter++;
//        if ($counter % 2 == 0) {
//            echo "<span style='font-weight: bold'>" .
//                $day . "</span> ";
//        } else {
//            echo $day . ' ';
//
//        }
//    }
//    echo '<br>';
//}

//fourth

//$szinek = array('A' => 'Kek', 'B' => 'Zold', 'c' => 'Piros');
//
//$lcaseArray = array_map('strtolower', $szinek);
//foreach ($lcaseArray as $key => $item) {
//    echo $key . ' ' . $item . '<br>';
//}
//$ucaseArray = array_map('strtoupper', $szinek);
//foreach ($ucaseArray as $key => $item) {
//    echo $key . ' ' . $item . '<br>';
//}
//$caseingArray = function ($array, $method) {
//    if ($method === 'tolower') {
//        $lcaseArray = array_map('strtolower', $array);
//        foreach ($lcaseArray as $key => $item) {
//            echo $key . ' ' . $item . '<br>';
//        }
//    } elseif ($method === 'toupper') {
//        $ucaseArray = array_map('strtoupper', $array);
//        foreach ($ucaseArray as $key => $item) {
//            echo $key . ' ' . $item . '<br>';
//        }
//    }
//};
//
//$caseingArray($szinek, 'tolower');
//$caseingArray($szinek, 'toupper');



