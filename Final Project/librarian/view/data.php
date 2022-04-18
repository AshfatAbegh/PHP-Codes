<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['res'])){
		$query = $conn->query("SELECT * FROM `book` ORDER BY `bookname` ASC");
		while($fetch = $query->fetch_array()){
			echo "
				<tr>
					<td>".$fetch['bookname']."</td>
					<td>".$fetch['authorname']."</td>
					<td>".$fetch['publishdate']."</td>
					
				</tr>
			";
		}
	}
?>
