<?php
   $server = "localhost";
   $user = "gau";
   $password = "gau123";
   $dbname = "mydata";

   $connection = mysqli_connect($server, $user, $password, $dbname);
   // var_dump($connection);
   if(!$connection){
      die ("Connection Error!!!");
   }
?>