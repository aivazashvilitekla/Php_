<?php
    include "function.php";
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
    შეიყვანეთ მოცემული კოდი
    <div class="box"><?php echo $random=rand(10000, 99999); ?></div><br>
        <input type="number" name="code" value="<?=$_POST["code"]?>">
        <input type="submit" name="send" value="Check">
    </form>
    <?php
        $r=$random;
        if(isset($_POST["send"])){
            $getCode = $_POST["code"];
            // function checkCodeF(){
            //     global $getCode, $r;
            //     echo $r;
            //     // if($getCode == $random){
            //     //     echo "კოდი სწორია";
            //     // }else{
            //     //     echo "სცადეთ თავიდან";
            //     // }
            // };
            // checkCodeF();
        }
    ?>
</body>
</html>