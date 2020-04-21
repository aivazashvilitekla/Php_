<article>
      <?php
         if(isset($_GET["cat"]))
         {
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM users WHERE Name='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div>
               <?=$row['age']?>
            </div>
            <div>
               <?=$row['gender']?>
            </div>
            <?php
         }
      ?>
</article>