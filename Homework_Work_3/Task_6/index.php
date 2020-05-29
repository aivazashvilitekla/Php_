<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        M: <input type="number" name="M" min="0"><br><br>
        N: <input type="number" name="N" min="0"><br><br>
        a: <input type="number" name="a"><br><br>
        b: <input type="number" name="b"><br><br>
        <input type="submit" value="draw table" name="draw"><br><br>
    </form>
    <?php
        if(isset($_POST["draw"])){
            $M=$_POST["M"];
            $N=$_POST["N"];
            $a=$_POST["a"];
            $b=$_POST["b"];
            if(!empty($M) && !empty($N) && !empty($a) && !empty($b)){
                if(!($a>$b)){
                    echo "<table border=1>";
                    for($row=0; $row<$M; $row++){
                        echo "<tr>";
                        for($col=0; $col<$N; $col++){
                            echo "<td>";
                            echo rand($a, $b);
                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table><br>";
                }else{
                    echo "Error, b must be greater than a!";
                }
            }
            else{
                echo "Error, something is missing!";
            }
        }
    ?>
</body>
</html>