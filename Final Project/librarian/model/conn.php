<?php
	$conn = new mysqli('localhost', 'root', '12345', 'project');
	
	if(!$conn){
		die("Error: Can't connect to the database!");
	}
?>