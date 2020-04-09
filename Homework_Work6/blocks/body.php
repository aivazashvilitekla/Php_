<div class="body">
   <nav>
      <ul>
         <?php
         echo "<h3>Task1</h3>";
            $query = "SELECT * FROM menu Where id=1";
            // $query = "SELECT id, title, description FROM menu";
            $result = mysqli_query($connection, $query);
            //var_dump($result);
            if(!$result){
               die ("Error!!"); 
            }
            echo "<b>Title</b>";
            while($row = mysqli_fetch_assoc($result)){
               echo "<li><a href='?cat=".$row["Title"]."'>".$row["Title"]."</a></li>";
               echo "<b>Text</b>";
               echo "<li><a href='?cat=".$row["Text"]."'>".$row["Text"]."</a></li>";
            }
            
         ?>
      </ul>
   </nav>
   <div class="nav2">
      <ul>
         <?php
         echo "<h3>Task2</h3>";
         $query2 = "SELECT * FROM menu";
         $result2 = mysqli_query($connection, $query2);
         if(!$result){
            die ("Error!!"); 
         }
         //echo "<b><font size=5>Title</font></b>";
         while($row2 = mysqli_fetch_assoc($result2)){
            echo "<b><font size=3>Title</font></b>";
            echo "<font size=2><li><a href='?cat=".$row2["Title"]."'>".$row2["Title"]."</a></li></font>";
            echo "<b><font size=3>Text</font></b>";
            echo "<font size=2><li><a href='?cat=".$row2["Text"]."'>".$row2["Text"]."</a></li></font>";
         }
         ?>
      </ul>
   </div>
   <div class="nav3">
      <ul>
         <?php
         echo "<h3>Task3</h3>";
         $query = "SELECT * FROM menu where id=2";
         $result = mysqli_query($connection, $query);
         if(!$result){
            die ("Error!!"); 
         }
         //echo "<b><font size=5>Title</font></b>";
         while($row = mysqli_fetch_assoc($result)){
            echo "<b><font size=3>Title</font></b>";
            echo "<font size=2><li><a href='?cat=".$row["Title"]."'>".$row["Title"]."</a></li></font>";
            echo "<b><font size=3>Text</font></b>";
            echo "<font size=2><li><a href='?cat=".$row["Text"]."'>".$row["Text"]."</a></li></font>";
         }
         ?>
      </ul>
   </div>
   <article>
         <?php
            //echo $_GET["cat"];
            //$cat = $_GET["cat"];
            //$query = "SELECT * FROM menu WHERE title='$cat'";
            //$result = mysqli_query($connection, $query);
            //$row = mysqli_fetch_assoc($result);
            // echo "<pre>";
            // print_r($row);
            // echo "</pre>";
         ?>
         <div>
            <//?=$row['description']?>
         </div>
         <div>
            <//?=$row['keywords']?>
         </div>
   </article>
   
</div>