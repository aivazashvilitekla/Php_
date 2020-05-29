<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<table border=1 cellspacing=0>";
    for($cols=0; $cols<10; $cols++){
        echo "<tr>";
        for($rows=0; $rows<10; $rows++){
            echo "<td>";
            echo rand(10, 99);
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table><br>";
?>
</body>
</html>