<?php
      $query = "SELECT id, engWord FROM words";
      $result = mysqli_query($connection, $query);
      if(isset($_GET['remove'])){
         $remove = $_GET['remove'];
         $delete_query = "DELETE FROM words WHERE id='$remove'";
         mysqli_query($connection,  $delete_query);
         header('Location: /midterm/mid/simple/?top=delete');  
      }  
?>
<article>
      <h1>DELETE</h1>
      <?php
         while($row = mysqli_fetch_assoc($result)){
            if($row["engWord"]==""){
               $row["engWord"] = "delete me!!!";
            }
            echo "<p><a href='?top=delete&remove=".$row["id"]."'>".$row["engWord"]."</a></p>";
         }
      ?>
</article>