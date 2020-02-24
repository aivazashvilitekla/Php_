<?php
    $data = array
    (
    array(56, 22, 18, 42, 56),
    array(10, 78, 15, 13, 74),
    array(15, 25, 29, 34, 15),
    array(61, 17, 15, 69, 76),
    array(61, 17, 15, 69, 31),
    array(61, 17, 15, 69, 14)
    );

    function drawTable(){
        global $data;
        $html = "<table>";
            foreach($data as $row) {
            $html .= "<tr>";
            foreach ($row as $cell) {
                $html .= "<td>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        echo "მატრიცა: ";
        echo $html;
    }
    echo drawTable();
    echo "<br>";



    function drawTable2(){
        global $data;
        $html = "<table>";
        for ($row = 0; $row < 4; $row++) {
            $html .= "<tr>";
            for($col = 0; $col < 3; $col++) {
                $cell = $row+$col;
                $html .= "<td>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        echo "შეცვლილი: ";
        echo $html;
    }
    echo drawTable2();
?>