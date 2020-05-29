<?php
session_start();  
  
function _generateRandom($length=6)  
{  
    $rand_src = array(  
        array(48,57)
        , array(97,122) 
    ); 
    $random_string = "";  
    for($i=0;$i<$length;$i++){  
        $i1=rand(0,sizeof($rand_src)-1);  
        $random_string .= chr(rand($rand_src[$i1][0],$rand_src[$i1][1]));  
    }  
    return $random_string;  
}  
  
$im = @imagecreatefromjpeg("captcha.jpg");   
$rand = _generateRandom(3);  
$_SESSION['captcha'] = $rand;  
ImageString($im, 5, 2, 2, $rand[0]." ".$rand[1]." ".$rand[2]." ", ImageColorAllocate ($im, 0, 0, 0));  
$rand = _generateRandom(3);  
ImageString($im, 5, 2, 2, " ".$rand[0]." ".$rand[1]." ".$rand[2], ImageColorAllocate ($im, 255, 0, 0));
imagejpeg($im,NULL,100); 
?>  