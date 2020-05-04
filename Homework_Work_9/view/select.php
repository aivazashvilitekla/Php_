<article>
      <?php
         if(isset($_GET["cat"]))
         {
            
            //echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM product WHERE productName='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <table border=1>
               <tr>
                  <td><b>Product Name -</b></td>
                  <td><?=$row['productName']?></td>
               </tr>
               <tr>
                  <td><b>Quantity -</b> </td>
                  <td><?=$row['quantity']?></td>
               </tr>
               <tr>
                  <td><b>Release Date -</b> </td>
                  <td><?=$row['releaseDate']?></td>
               </tr>
               <tr>
                  <td><b>Due Date -</b> </td>
                  <td><?=$row['dueDate']?></td>
               </tr>
               <tr>
                  <td><b>Company -</b> </td>
                  <td><?=$row['company']?></td>
               </tr>
               <tr>
                  <td><b>Weight -</b> </td>
                  <td><?=$row['weight']?></td>
               </tr>
               <tr>
                  <td><b>Caloricity -</b> </td>
                  <td><?=$row['caloricity']?></td>
               </tr>
               <tr>
                  <td><b>Fat Content -</b> </td>
                  <td><?=$row['fatContent']?></td>
               </tr>
               <tr>
                  <td><b>Insertion Date -</b> </td>
                  <td><?=$row['insertionDate']?></td>
               </tr>
            </table>
            <?php
         }
      ?>
</article>