<div class="body">
   <nav>
      <ul>
         <?php
            $query = "SELECT * FROM words";
            $result = mysqli_query($connection, $query);
            if(!$result){
               die ("Error!!"); 
            }  
            while($row = mysqli_fetch_assoc($result)){
               echo "<li><a href='?cat=".$row["engWord"]."'>".$row["engWord"]."</a></li>";
               echo "<br>";
            }
         ?>
      </ul>
   </nav>
   <?php
      if(isset($_GET['top']) && $_GET['top']=="insert"){
         include "view/insert.php"; 
      }else if(isset($_GET['top']) && $_GET['top']=="delete"){
         include "view/delete.php"; 
      }
      else if(isset($_GET['top']) && $_GET['top']=="test"){
         include "view/test.php"; 
      }
      else{
         include "view/select.php"; 
      }
   ?>
</div>