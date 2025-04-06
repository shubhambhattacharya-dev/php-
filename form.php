
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="form.php" method="post">
<label>
   USER NAME
</label><br>
<input type="text" name="username"><br>
<label>
   Paasword
</label><br>
<input type="password" name="password"><br>
<input type="submit" value="Log in">
</form>
    
</body>
</html>




<!-- php file here -->

<?php

// echo $_GET["username"]; echo "<br>";//not a best way ;
echo "{$_POST["username"]} <br>";


echo "{$_POST["password"]} <br>";


?>