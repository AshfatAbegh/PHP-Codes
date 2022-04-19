<?php
	$title = "search book";
	include('header.php');

	$name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) 
{

?>
</head>
<body>
		
      <h1>Library</h1>

			   <level>Want To Add Book?
						<a href="addbook.php">ADD BOOK</a><br><br>
						<a href="homepage.php">Home</a>

		<center>
			<form method="POST" action="../controller/search.php" >
				<fieldset style="width:350px">
					<h1 align ="center"><strong>Search Book Here</strong></h1>
					<strong>Book Id</strong><br>
					<input type="text" name="bid" value=""><br><br>
					

					<input type="submit" name="submit" value="Seacrh"><br><hr>
					<!--<a href="viewbook.php"><button type="button">Add Book</button></a>-->
				</fieldset>
			</form>
		</center>

 

  <?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>