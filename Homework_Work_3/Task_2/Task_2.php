<?php
    include "f.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        შეიყვანეთ სტრიქონების რაოდენობა: <input type="number" name='M' value="<?=$_POST["M"]?>"><br>
        შეიყვანეთ სვეტების რაოდენობა: <input type="number" name='N' value="<?=$_POST["N"]?>"><br>
        Min random num: <input type="number" name='a' value="<?=$_POST["a"]?>"><br>
        Max random num: <input type="number" name='b' value="<?=$_POST["b"]?>"><br>
        <input type="submit" name="send" value="Check">
    </form>

    <?php
        if(isset($_POST["send"])){
            if($_POST["M"]<=0 || $_POST["N"]<=0){
                echo "Try another numbers";
            }
            else{
                function1($_POST["M"], $_POST["N"], $_POST["a"], $_POST["b"]);
            }
        }
    ?>
</body>
</html>