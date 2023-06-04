<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $t = date("H");
        if ($t < "20") {
            echo "Have a good day";
        }




        // nomer 1
        $data = array("Apel", "Jeruk", "Mangga", "Pisang", "Anggur");
        foreach ($data as $item) {
        if ($item == "Mangga") {
            echo "Saya suka $item!";
        } else {
            echo $item;
        }
        echo "\n";
        }

        echo "<br>";

        // nomer 2
        $data_buah = array(
        array("Apel", 10),
        array("Jeruk", 13),
        array("Mangga", 8),
        array("Pisang", 911)
        );

        for ($i = 0; $i < count($data_buah); $i++) {
            for ($j = 0; $j < count($data_buah[$i]); $j++) {
                if ($j == 0) {
                echo $data_buah[$i][$j] . " Ada sebanyak " . $data_buah[$i][$j+1] . " buah.";
                } else {
                break;
                }
                echo "<br>";
            }
        }
    ?>

    <?php

    $x = 1;
    while ($x <= 5) {
        echo "The number is:$x <br>";
        $x++;
    }
    echo"<br>"
    ?>

    <?php
    $x = 1;
    do {
        echo "The number is: $x <br>";
        $x++;
    }while ($x <= 5);
    echo"<br>"
    ?>

    <?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is; $x <br>";
    }
    echo"<br>"
    ?>

    <?php
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
        echo "$value <br>";
    }
    echo"<br>"
    ?>

<?php
    $cars = array("Volvo", "BMW", " Toyota");
    echo "I like" . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
    ?>

    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlenght = count($cars);
    for($x = 0; $x < $arrlenght; $x++) {
        echo $cars[$x];
        echo "<br>";
    }
    echo"<br>";
    ?>

    <?php
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", value=" . $x_value;
        echo "<br>";
    }
    echo"<br>";
    ?>

    <?php
    $cars = array
    (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15),
    );
    for ($row = 0; $row < 4; $row++) {
        echo "<p><b>Row Number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) {
            echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }
    echo"<br>";
    ?>
</body>
</html>