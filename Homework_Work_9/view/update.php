<article>
   <h1>Update</h1>
   <div>
   <table border="1" cellpadding="10">
   <?php
      $query = "SELECT * FROM product";
      $result = mysqli_query($connection, $query);
      if(!$result){
         die ("Error!!"); 
      }  
      while($row = mysqli_fetch_assoc($result)){
         echo "<tr>
                  <td>".$row["productName"]."</td>
                  <td><a href='?id=".$row["id"]."'><button>EDIT</button></a></td>
               </tr>";
      }
   ?>
   </table>
   </div>
</article>