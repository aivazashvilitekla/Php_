<?php 
    function checkCodeF(){
        global $getCode, $r;
        echo $r;
        if($getCode == $r){
            echo "კოდი სწორია";
        }else{
            echo "სცადეთ თავიდან";
        }
    };
    checkCodeF();       
?>