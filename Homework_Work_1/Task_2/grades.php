<?php
    $grade = $_POST["grade"];
    if($grade <= 100 && $grade >= 91)
        echo 'A';
    elseif($grade <= 90 && $grade >= 81)
        echo 'B';
    elseif($grade <= 80 && $grade >= 71)
        echo 'C';
    elseif($grade <= 70 && $grade >= 61)
        echo 'D';
    elseif($grade <= 60 && $grade >= 51)
        echo 'E';
    elseif($grade <= 50 && $grade >= 0)
        echo 'FX';
    else
        echo 'A';
?>