<style>
   ul{
      position: relative;
      right: 35px;
   }
</style>
<div class="body">
   <nav>
      <ul>
         <?php
            $query = "SELECT * FROM product";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               echo "<br>";
               echo "<li><a href='?cat=".$row["productName"]."'>".$row["productName"]."</a></li>";
            }
         ?>
      </ul>
   </nav>
   <?php
      if(isset($_GET['top']) && $_GET['top']=="insert"){
         include "view/insert.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="delete"){
         include "view/delete.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="update"){
         include "view/update.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="products"){
         include "view/products.php"; 
      }else if(isset($_GET['id']) && $_GET['id']!=""){
         include "view/edit.php"; 
      }else{
         include "view/select.php"; 
      }
   ?>
</div>