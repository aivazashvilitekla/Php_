<?php
    $data = array
    (
    array(56, 22, 18, 42),
    array(10, 78, 15, 13),
    array(15, 25, 29, 34),
    array(61, 17, 15, 69)
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
    function jeradebi(){
        global $data;
        $number = $_POST["num"];
        $html2 = "<table>";
        foreach($data as $row) {
            $html2 .= "<tr>";
            foreach ($row as $cell) {
                if($cell%$number==0){
                    $html2 .= "<td>" . $cell . "</td>";}
            }  
            $html2 .= "</tr>";
        }
        $html2 .= "</table>";
        echo $number."-ის ჯერადები";
        echo $html2;
    }
    echo jeradebi();
    echo "<br>";

    function sum(){
        global $data;
        $sum = 0;
        for ($row = 0; $row < 4; $row++) {
            for ($col = 0; $col < 3; $col++) {
              $sum+=$data[$row][$col];
            }
        }
        echo "ჯამი - ".$sum;
    }
    echo sum();
    echo "<br>";

    function multiply(){
        global $data;
        $mul = 1;
        for ($row = 0; $row < 4; $row++) {
            for ($col = 0; $col < 3; $col++) {
              $mul*=$data[$row][$col];
            }
        }
        echo "ნამრავლი - ".$mul;
    }
    echo multiply();
    echo "<br>";


    function sashualo(){  
        global $data;
        $sum = 0;
        $c=0;
        foreach($data as $a){
            $c +=count($a);
        }
        for ($row = 0; $row < 4; $row++) {
            for ($col = 0; $col < 3; $col++) {
              $sum+=$data[$row][$col];
            }
        }
        echo "საშუალო - ".($sum/$c);
    }
    echo sashualo();
    echo "<br>";


    function gani(){
        global $data;
        $min=$data[0][0];
        $max=$data[0][0];

        for ($row = 0; $row < 4; $row++) {
            for ($col = 0; $col < 3; $col++) {
              if($data[$row][$col]<$min){
                  $min = $data[$row][$col];
              }
              if($data[$row][$col]>$max){
                $max = $data[$row][$col];
            }
            }
        }
        echo "განი - ".($max-$min)."(max-".$max." min-".$min.")";
    }
    gani();

    echo "<br>";
    echo "<br>";
    function drawTable2(){
        global $data;
        $html = "<table>";
            foreach($data as $row) {
            $html .= "<tr>";
            foreach ($row as $cell) {
                $str = (string)$cell;
                $a = $str[0];
                $b = $str[1];
                $cell=(int)$a+(int)$b;

                $html .= "<td>" . $cell . "</td>";
            }
            $html .= "</tr>";
        }
        $html .= "</table>";
        echo "მატრიცა: ";
        echo $html;
    }
    echo drawTable2();
?>