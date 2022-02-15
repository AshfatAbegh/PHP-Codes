<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication Table</title>
</head>
<body>
     <form name="frm" method="post">
     	Enter Number to Find Table:
     	<input type="number" name="n">
     	<br><br>

     	<input type="submit" name="sub">
</form>
<br>
<?php
   @$x = $_POST['n'];
   @$sub = $_POST['sub'];
   if($sub)

   	for($i=1; $i<=10; $i++){
   		$sum = $x * $i;
   		echo "$x * $i = $sum<br>";
   	}
?>
</body>
</html>