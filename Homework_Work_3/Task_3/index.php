<?php session_start() ?>  
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>

</head>
<body>
<?php  
if(isset($_POST["captcha"]))  
if($_SESSION["captcha"]==$_POST["captcha"])  
{  
    
    echo '<font color="green"><b>CAPTHCA is valid</b></font>';  
}  
else  
{  
    echo '<font color="red"><b>CAPTHCA is not valid</b></font>';  
}  
?>
<form role="form" method="post">
   <div>
    <div>Please Enter 3 Black Symbols
    <img src="captcha.php" alt="captcha image"></div>
	<div><input type="text" name="captcha" size="3″ maxlength="3″></div>
  </div>
  
  <div style="padding-top:20px;">
	  <button type="submit">Submit</button>
  </div>
</form>
</body>
</html>