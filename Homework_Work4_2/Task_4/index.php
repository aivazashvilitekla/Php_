<?php
function generateRandom($length=6)  
{  
    $rand_src = array(  
        array(48,57) //digits
        , array(97,122) //letters
    ); 
    $random_string = "";  
    for($i=0;$i<$length;$i++){  
        $i1=rand(0,sizeof($rand_src)-1);  
        $random_string .= chr(rand($rand_src[$i1][0],$rand_src[$i1][1]));  
    }  
    return $random_string;  
}
echo generateRandom();
?>