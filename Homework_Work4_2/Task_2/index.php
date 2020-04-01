<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        შეიყვანეთ სტრიქონების რაოდენობა: <input type="number" name="row"><br><br>
        შეიყვანეთ სვეტების რაოდენობა: <input type="number" name="col"> <br><br>
        
        <input type="submit" name="send" value="Go">
    </form>

    <?php 
        if(isset($_POST["send"]))
        {

            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $p = '';
            for($i=1; $i <= 7; $i++){
                $p .= $characters[rand(0, strlen($characters))];
            }
            echo "<table border=1>";
                for ($row=0; $row < $_POST["row"]; $row++) { 
                    echo "<tr>";
                    for ($col=0; $col < $_POST["col"]; $col++) { 
            
                        
                        echo "<td>$p</td>";
                           }
                          echo "</tr>";
                    }
                    echo "</table>"; 
        }
    ?>
</body>
</html>