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

	elseif(ISSET($_POST['search'])){
		$search = $_POST['search'];
		$query = $conn->query("SELECT * FROM `book` WHERE (`bookname` LIKE '%".$search."%') OR (`authorname` LIKE '%".$search."%') ORDER BY `bookname` ASC");
		$rows = $query->num_rows;
		
		if($rows > 0){
			while($fetch = $query->fetch_array()){
				echo "
					<tr>
						<td>".$fetch['bookname']."</td>
						<td>".$fetch['authorname']."</td>
						<td>".$fetch['publishdate']."</td>
						
					</tr>
				";
			}
		}else{
			echo "
				<tr>
					<td colspan='5'><center>No Search Found!</center></td>
				</tr>
			";
		}
	}
?> 