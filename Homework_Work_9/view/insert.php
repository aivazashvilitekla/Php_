<?php
   if(isset($_POST['insertbutton'])){
      $productName = $_POST['productName'];
      $quantity = $_POST['quantity'];
      $releaseDate = $_POST['releaseDate'];
      $dueDate = $_POST['dueDate'];
      $company = $_POST['company'];
      $weight = $_POST['weight'];
      $caloricity = $_POST['caloricity'];
      $fatContent = $_POST['fatContent'];
      $insertionDate = $_POST['insertionDate'];
      $sql =  "INSERT INTO product (productName, quantity, releaseDate, dueDate, company, weight, caloricity, fatContent, insertionDate)
               VALUES (
                  '$productName', 
                  '$quantity', 
                  '$releaseDate', 
                  '$dueDate', 
                  '$company', 
                  '$weight', 
                  '$caloricity', 
                  '$fatContent', 
                  '$insertionDate')";
      mysqli_query($connection, $sql);
      header('Location: /Php_/Homework_Work_9?top=insert');  
   }          
?>
<article>
     <h1>INSERT</h1>
     <form action="" style="padding:20px" method="post">
         Product Name
         <br>
         <input type="text" name="productName">
         <br>
         <br>
         Quantity
         <br>
         <input type="number" name="quantity">
         <br>
         <br>
         Release Date
         <br>
         <input type="date" name="releaseDate">
         <br>
         <br>
         Due Date
         <br>
         <input type="date" name="dueDate">
         <br>
         <br>
         Company
         <input type="text" name="company">
         <br>
         <br>
         Weight
         <input type="number" name="weight" step="0.01">
         <br>
         <br>
         Caloricity
         <input type="number" name="caloricity" step="0.01">
         <br>
         <br>
         Fat Content
         <input type="number" name="fatContent" step="0.01">
         <br>
         <br>
         Insertion Date
         <input type="date" name="insertionDate">
         <br>
         <br>
         <input type="submit" name="insertbutton" value="INSERT">
     </form>
</article>