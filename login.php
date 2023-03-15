<?php

// Peroleh variabel msg
$msg = $_GET["msg"] ?? "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Manajement Data Bintang Film</title>
</head>
<body>
<center>
<h1>Manajement Data Bintang Film</h1>
<hr>
<form action="menu.php.php" method="pots">
<table>
<tr>
<td>Pemakai</td>
<td>
<input type="text" name="pemakai">
</td>
</tr>
<tr>
<td>Password</td>
<td>
<input type="text" name="password">
</td>
</tr>
</table>
<input type="submit" value="login">
<input type="reset" value="Reset">
</form>
<?php
print ("$msg<br>\n");
?>
</center>
</body>
</html>

