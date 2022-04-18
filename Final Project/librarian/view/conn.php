<?php
	$conn = new mysqli('localhost', 'root', '', 'project');
	
	if(!$conn){
		die("Error: Can't connect to the database!");
	}
?>