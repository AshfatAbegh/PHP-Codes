<?php
$title = "View Book";
include('header.php');
$bookid = $_COOKIE['bookid'];
if ($_COOKIE['flag'] == true) {
	$myfile = fopen('../data2.json', 'r');
    $data = fread($myfile, filesize('../data2.json'));
    fclose($myfile);
	$all_book = json_decode($data,true);

	for($i = 0; $i < sizeof($all_book); $i++) {
		if($all_book[$i]['bookid'] == $bookid){
			$index = $i;}
	}

    $bookid = $all_book[$index]['bookid'];
	$bookname = $all_book[$index]['bookname'];
	$authorname = $all_book[$index]['authorname'];
	$publishdate = $all_book[$index]['publishdate'];
?>

</head>
<body>
	
                        
                         <center><h1>Search Found</h1></center>
               
                       
                        <br><a href='../controller/logout.php'>Log Out</a>
                        <br>
                        <br><a href='homepage.php'>Home</a><br>
                        <br><a href='searchhtml.php'>Search</a><br>
                        <br><a href='updatebook.php'>Update Book</a><br>
                        <br><a href='deletebook.php'>Delete Book</a><br>
   
		<center>
			<h1>BOOK ID :<?=$bookid?></h1>
		</center>

	
	
		<center>
			<table border="1" >
			
			<tr align="center" >
				<h3>
					<td >Book Id</td>
				</h3>
				<td><?=$bookid?></td>
			</tr>
			<tr align="center" >
				<h3>
					<td >Book NAME</td>
				</h3>
				<td><?=$bookname?></td>
			</tr>
			<tr align="center" >
				<h3>
					<td >Author Name</td>
				</h3>
				<td><?=$authorname?></td>
			</tr>
			
			<tr align="center">
				<h3>
					<td>Publish Date</td>
				</h3>
				<td><?=$publishdate?></td>
			</tr>
			

			</table>
		</center>



<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>