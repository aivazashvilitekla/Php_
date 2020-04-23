<article>
      <?php
         if(isset($_GET["cat"]))
         {
            echo $_GET["cat"];
            $cat = $_GET["cat"];
            $query = "SELECT * FROM words WHERE engWord='$cat'";
            $result = mysqli_query($connection, $query);
            $row = mysqli_fetch_assoc($result);
            ?>
            <div>
               <br><br>
               ქართული მნიშვნელობა <br>
               <font color=red><?=$row['geoWord']?></font>
            </div>
            <div>
            </div>
            <?php
         }
      ?>
</article>