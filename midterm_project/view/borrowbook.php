
<?php
$title = "Borrow Time";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) 
{
?>

<body>
  
                    <center> <h1>Borrow Details</h1></center>
                    	 <a href="homepage.php" style ="color:black;"> Home</a><br><br><br>
                        <a href="viewprofile.php" style ="color: black;"><?=$name?></a><br><br><br>
                        <a href='../controller/logout.php'style ="color:black;">Log Out</a><br>
	

		<center>
			<table border="1">
			<tr>
			<h3>
				<td >Id</td>
				<td >Name</td>
				<td >Book Name</td>
				<td >Borrow Date</td>
				
			</h3>
			</tr>
			<?php
				$myfile = fopen('../borrow.json', 'r');
        		$data = fread($myfile, filesize('../borrow.json'));
        		fclose($myfile);
				$all_time = json_decode($data,true);

				for($i = 0; $i < sizeof($all_time); $i++) {
					?>
					<tr align="center" style="font-size: ">
						<td><?=$all_time[$i]['Id']?></td>
						<td><?=$all_time[$i]['Name']?></td>
						<td><?=$all_time[$i]['BookName']?></td>
						<td><?=$all_time[$i]['BorrowDate']?></td>
						
					</tr>
				<?php
			}
			?>		
			</table>
		</center>
	</div>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>