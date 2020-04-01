<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    შეიყვანეთ რიცხვი: <input type="number" name="num" value="<?=$_POST["val"]?>">
    <input type="submit" name="send" value="Check">
    </form>
    <?php
        if(isset($_POST["send"])){
            $number = $_POST["num"];
            $len = strlen((string)$number);
            echo $number;
            echo "<br>";
            echo "რიცხვი ".$len."-ნიშნაა";
        }
    ?>
</body>
</html>