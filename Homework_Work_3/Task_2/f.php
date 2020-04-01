<?php
    function function1($m, $n, $a, $b){
        $m = $_POST["M"];
        $n = $_POST["N"];
        $a = $_POST["a"];
        $b = $_POST["b"];
        $tabl = "<table border=1>";
        for($i=0; $i<$m; $i++){
            $tabl .= "<tr>";
            for($j=0; $j<$n; $j++){
                $tabl .= "<td>".rand($a, $b)."</td>";
            }
            $tabl .= "</tr>";
        }
        $tabl .= "</table>";
        echo $tabl;
    }
?>