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
        a: <input type="number" name="a"><br><br>
        b: <input type="number" name="b"><br><br>
        <input type="submit" value="draw" name="draw"><br><br>
    </form>
    <?php
        if(isset($_POST["draw"])){
            $M=$_POST["M"];
            $a=$_POST["a"];
            $b=$_POST["b"];
            if(!empty($M) && !empty($a) && !empty($b)){
                if (!($a>$b)) {
                    $arr = array();
                    for($i=0; $i<$M; $i++){
                        $arr[$i] = rand($a, $b);
                    }
                    foreach($arr as $values){
                        echo $values . ';';
                    }
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