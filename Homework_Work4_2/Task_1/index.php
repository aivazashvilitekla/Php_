<?php
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$p = '';
for($i=1; $i <= 7; $i++){
    $p .= $characters[rand(0, strlen($characters))];
}
echo "<table border=1>";
	for ($row=0; $row < 10; $row++) { 
		echo "<tr>";
		for ($col=0; $col < 10; $col++) { 

            
            echo "<td>$p</td>";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>