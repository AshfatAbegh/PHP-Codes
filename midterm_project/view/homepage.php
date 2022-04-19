<?php
$title = "Home Page";
include('header.php');
$name = $_COOKIE['username'];
if ($_COOKIE['flag'] == true) {

?>
<style>
</style>
</head>
<body>
    <h1 align="center">Welcome To Library</h1><br />
    <a href="viewprofile.php"><button type="button"><?=$name?></button></a><br><br>
     <a href="addbook.php"><button type="button">Add Book</button></a>
     <br /><br />
     <a href="searchhtml.php"><button type="button">Search Book</button></a>
     <br><br>
    <a href='../controller/logout.php'><button type="button">Log Out</button></a><br><br>
    <a href="shift.php"><button type="button">Shifting Time</button></a><br><br>
    <a href="updatebook.php"><button type="button">Update Book</button></a><br><br>
    <a href="borrowbook.php"><button type="button">borrow Book</button></a><br><br>
     <a href="deletebook.php"><button type="button">delete Book</button></a>
       
</body>
<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
?>
