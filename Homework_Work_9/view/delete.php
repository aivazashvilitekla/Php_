<?php
      $query = "SELECT id, productName FROM product";
      $result = mysqli_query($connection, $query);
      if(isset($_GET['remove'])){
         $remove = $_GET['remove'];
         $delete_query = "DELETE FROM product WHERE id='$remove'";
         mysqli_query($connection,  $delete_query);
         header('Location: /Php_/Homework_Work_9/?top=delete');  
      }  
?>
<article>
      <h1>DELETE</h1>
      <?php
         while($row = mysqli_fetch_assoc($result)){
            if($row["productName"]==""){
               $row["productName"] = "delete me!!!";
            }
            echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["productName"]."</a></p>";
         }
      ?>
</article>