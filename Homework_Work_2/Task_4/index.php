<?php
    $cars = array(
        array("Make"=>"Toyota",
        "Model"=>"Corolla",
        "Color"=>"White",
        "Mileage"=>24000,
        "Status"=>"Sold"),

        array("Make"=>"Toyota",
        "Model"=>"Camry",
        "Color"=>"Black",
        "Mileage"=>56000,
        "Status"=>"Available"),

        array("Make"=>"Honda",
        "Model"=>"Accord",
        "Color"=>"White",
        "Mileage"=>15000,
        "Status"=>"Sold")
    );

    function drawTable(){
        global $cars;
        $html = "<table>";
        foreach($cars as $row) {
            $html .= "<tr>";
            foreach ($row as $cell) {
                $html .= "<td>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        echo $html;
    }
    echo drawTable();
?>