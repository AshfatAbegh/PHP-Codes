<?php
$title = "View Profile";
include('header.php');
$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
	$myfile = fopen('../library.json', 'r');
    $data = fread($myfile, filesize('../library.json'));
    fclose($myfile);
	$all_library = json_decode($data,true);

	for($i = 0; $i < sizeof($all_library); $i++) {
		if($all_library[$i]['name'] == $name){
			$index = $i;}
	}
    
    $name = $all_library[$index]['name'];
	$username = $all_library[$index]['username'];
	$email = $all_library[$index]['email'];
	

?>

</head>
<body> 
	

               <h1 >Profile</h1>
                    <a href="homepage.php"> Back</a><br>
                    <a href='../controller/logout.php'>Log Out</a><br><br>
                    <a class= "button" href="editprofile.php?index=<?php echo $index ?>" name="editprofile" >Edit Profile</a><br><br>
			<!--<a class= "button" href="change_pass.php" name="editprofile" >Change Password</a>-->
        <center>
			<h1><?=$name?></h1>


			<table border="2">
			<tr align="center">
			<h3>
				<td >NAME</td>
			</h3>
				<td><?=$name?></td>
			</tr>
			<tr align="center">
				<h3>
					<td >USER NAME</td>
				</h3>
				<td><?=$username?></td>
			</tr>
			<tr align="center">
				<h3>
					<td >EMAIL</td>
				</h3>
				<td><?=$email?></td>
			</tr>
			

			</table>
		</center>
	<br><br>
		
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>