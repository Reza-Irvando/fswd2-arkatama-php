<?php
function pattern1($row = 5, $symbol = "*"){
    echo "Triangle Upside Left <br>";
    for ($x = 1; $x <= $row; $x++){
        for ($y = 1; $y <= $x; $y++){
            echo "$symbol ";
        }
        echo "<br>";
    }
}

function pattern2($row = 5, $symbol = "*"){
    echo "Triangle Downside Left <br>";
    for ($x = $row; $x >= 1; $x--){
        for ($y = 1; $y <= $x; $y++){
            echo "$symbol ";
        }
        echo "<br>";
    }
}

function pattern3($row = 5, $symbol = "*"){
    echo "Triangle Upside Right <br>";
    for ($x = 1; $x <= $row; $x++){
        for ($y = $row; $y > $x; $y--){
            echo "&nbsp;&nbsp";
        }
        for ($z = 1; $z <= $x; $z++){
            echo $symbol;
        }
        echo "<br>";
    }
}

function pattern4($row = 5, $symbol = "*"){
    echo "Triangle Downside Right <br>";
    for ($x = 1; $x <= $row; $x++){
        for ($z = 1; $z < $x; $z++){
            echo "&nbsp;&nbsp";
        }
        for ($y = $row; $y >= $x; $y--){
            echo $symbol;
        }
        echo "<br>";
    }
}

function callpattern($b) {
    switch ($b) {
        case "pattern1":
            pattern1(5);
            break;
        case "pattern2":
            pattern2(5);
            break;
        case "pattern3":
            pattern3(5);
            break;
        case "pattern4":
            pattern4(5);
            break;
        default:
            echo "Salah input";
    }
}

echo "Soal 1 <br>";
pattern1();
pattern2();
pattern3();
pattern4();

echo "Soal 2 <br>";
callpattern("pattern4");
callpattern("pattern1");
callpattern("pattern2");
callpattern("pattern3");

echo "Soal 3 <br>";
pattern1(6, "$");
pattern2(10, "@");
pattern3(9, "#");
pattern4(6);
?>