<?php

 session_start();
 
    $conn = new mysqli('localhost', 'root', '', 'project');
    
    if(!$conn){
        die("Error: Can't connect to the database!");
    }

$sql = "SELECT * from borrow";
$result = mysqli_query($conn,$sql) or die("Query Failed");
if(mysqli_num_rows($result)>0){
 
?>
<thead>
 
<th>Name</th>
<th>Book Name</th>
<th>Borrow Date</th>
</thead>
<?php
while($row = mysqli_fetch_assoc($result)){
?>
<tbody>
<tr>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['bookname']; ?></td>
<td><?php echo $row['borrowdate']; ?></td>
 
</tr>
<?php
 }
?>
</tbody>
</table>
<?php } 
mysqli_close($conn);
?>
