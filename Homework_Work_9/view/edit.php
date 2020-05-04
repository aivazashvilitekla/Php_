<?php
   if(isset($_GET['id'])){
      $id = $_GET['id'];
      // echo $id;
      $sql_edit = "SELECT * FROM product WHERE id=$id";
      $result = mysqli_query($connection, $sql_edit);
      $row = mysqli_fetch_assoc($result);
      // var_dump($row);
   } 
   if(isset($_POST['updatebutton'])){
      $id = $_POST['id'];
      $productName = $_POST['productName'];
      $quantity = $_POST['quantity'];
      $releaseDate = $_POST['releaseDate'];
      $dueDate = $_POST['dueDate'];
      $company = $_POST['company'];
      $weight = $_POST['weight'];
      $caloricity = $_POST['caloricity'];
      $fatContent = $_POST['fatContent'];
      $insertionDate = $_POST['insertionDate'];
      $sql_update = "UPDATE product SET 
                                  productName='$productName', 
                                  quantity='$quantity', 
                                  releaseDate='$releaseDate', 
                                  dueDate='$dueDate', 
                                  company='$company', 
                                  weight='$weight', 
                                  caloricity='$caloricity', 
                                  fatContent='$fatContent', 
                                  insertionDate='$insertionDate'
                     WHERE id=$id";
      mysqli_query($connection, $sql_update);
      header('Location: ?top=update');               
   }     
?>
<article>
     <h1>Edit Nav Item</h1>
     <form action="" style="padding:20px" method="post">
     Product Name
         <input type="text" name="productName" value="<?=$row['productName']?>">
         <br>
         <br>
         Quantity
         <br>
         <input type="number" name="quantity" value="<?=$row['quantity']?>">
         <br>
         <br>
         Release Date
         <br>
         <input type="date" name="releaseDate" value="<?=$row['releaseDate']?>">
         <br>
         <br>
         Due Date
         <br>
         <input type="date" name="dueDate" value="<?=$row['dueDate']?>">
         <br>
         <br>
         Company
         <input type="text" name="company" value="<?=$row['company']?>">
         <br>
         <br>
         Weight
         <input type="number" name="weight" value="<?=$row['weight']?>">
         <br>
         <br>
         Caloricity
         <input type="number" name="caloricity" value="<?=$row['caloricity']?>">
         <br>
         <br>
         Fat Content
         <input type="number" name="fatContent" value="<?=$row['fatContent']?>">
         <br>
         <br>
         Insertion Date
         <input type="date" name="insertionDate" value="<?=$row['insertionDate']?>">
         <br>
         <br>
         <input type="hidden" name="id" value="<?=$row['id']?>">
         <input type="submit" name="updatebutton" value="UPDATE">
     </form>
</article>