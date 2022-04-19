<?php
$title = "Shifting Time";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) 
{
?>

<body>
  
                   <center> <h1color: black;>Shifting Hours</h1></center>
                    	 <a href="homepage.php" style ="color:black;"> Home</a><br><br>
                        <a href="viewprofile.php" style ="color: black;"><?=$name?></a><br><br>
                        <a href='../controller/logout.php'style ="color:black;">Log Out</a>
	

		<center>
			<table border="1">
			<tr>
			<h3>
				<td >Librarian</td>
				<td >Time</td>
				<td >Day</td>
				
			</h3>
			</tr>
			<?php
				$myfile = fopen('../shift.json', 'r');
        		$data = fread($myfile, filesize('../shift.json'));
        		fclose($myfile);
				$all_time = json_decode($data,true);

				for($i = 0; $i < sizeof($all_time); $i++) {
					?>
					<tr align="center" style="font-size: ">
						<td><?=$all_time[$i]['librarian']?></td>
						<td><?=$all_time[$i]['time']?></td>
						<td><?=$all_time[$i]['day']?></td>
						
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