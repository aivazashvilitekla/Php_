<style>
    table{
        width: 570px;
        height: 300px;
    }
    .trtr{
        font-weight: bold;
        font-size: 1.5em;
    }
</style>
<article>
    <h1>Products</h1>
    <?php
            $query = "SELECT * FROM product order by rand() limit 5";
            $result = mysqli_query($connection, $query);
            echo "<table border=1>";
            if(!$result){
               die ("Error!!"); 
            }  
            echo "<tr class='trtr'><td>Product Name</td><td>Company</td><td>Weight</td><td>Full Info</td></tr>";
            echo "<tr>";
            $i=0;
            while($row = mysqli_fetch_assoc($result)){
                echo "<td><a href='?cat=".$row["productName"]."'>".$row["productName"]."</a></td>";
                echo "<td><a href='?cat=".$row["company"]."'>".$row["company"]."</a></td>";
                echo "<td><a href='?cat=".$row["weight"]."'>".$row["weight"]."</a></td>";
                echo "<td><a href='?cat=".$row["productName"]."'><button name='button2'>More</button></a></tr>";
            }
            echo "</tr>";
            echo "</table>";
            ?>
            
               
            
</article>