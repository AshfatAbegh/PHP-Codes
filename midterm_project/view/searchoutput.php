<?php
$title = "Home Page";
include('header.php');
$bookid = $_COOKIE['bookid'];
if ($_COOKIE['flag'] == true) {

?>
</head>
<body style="background-color:lightgrey;">

                    <h1>Search Found</h1>
                        <a href="viewbook.php" color:    RosyBrown;>Book details :<?=$bookid?></a><br><br>
                        <a href='../controller/logout.php'color:RosyBrown;>Log Out</a><br>
                        <br>
                        <a href='homepage.php'color:RosyBrown;>Home</a><br><br>




<?php
}
   else
    {
        header('location: login.php');
    }
    include('footer.php');
    ?>
