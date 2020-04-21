<?php
   if(isset($_POST['insertbutton'])){
      $name = $_POST['name'];
      $lastname = $_POST['lastname'];
      $age = $_POST['age'];
      $bday = $_POST['bday'];
      $rday = $_POST['regday'];
      $pass = $_POST['password'];
      $gender = $_POST['gender'];
      $sql =  "INSERT INTO users (name, lastname, age, birthday, regdate, password, gender)
               VALUES (
                  '$name', 
                  '$lastname', 
                  '$age', 
                  '$bday', 
                  '$rday', 
                  '$pass', 
                  '$gender')";
      mysqli_query($connection, $sql);
      header('Location: /Php_/Homework_Work7/simple/?top=insert');  
   }          
?>
<article>
     <h1>INSERT</h1>
     <form action="" style="padding:20px" method="post">
         Name
         <input type="text" name="name">
         <br>
         <br>
         Lastname
         <input type="text" name="lastname">
         <br>
         <br>
         Age
         <input type="number" name="age">
         <br>
         <br>
         Birthday
         <input type="date" name="bday">
         <br>
         <br>
         Registration Day
         <input type="date" name="regday">
         <br>
         <br>
         Password
         <input type="password" name="password">
         <br>
         <br>
         Gender
         <input type="text" name="gender">
         <br>
         <br>
         <input type="submit" name="insertbutton" value="INSERT">
     </form>
</article>