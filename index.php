<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>home</title>
</head>
<body>

	<form action="index.php" method="get" name="form">
		name:<input type="txt" name="name">
		age:<input type="number" name="age">
		<input type="submit">
		
	</form>
<?php
       $name = $_GET['name'];
       $age = $_GET['age'];

       echo($name);


?>
</body>
</html>