<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        enter a num: <br>
        <input type="number" name="num">
        <input type="submit" value="check" name="send">
    </form>
    <?php
        if(isset($_POST["send"])){
            include "matrix.php";
        }
    ?>
</body>
</html>