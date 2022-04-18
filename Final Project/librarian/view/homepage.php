<?php
// session_start();
?>
<?php
$title = "Home Page";
include('header.php');
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" href="css/homepage.css">
</head>
<body>
<?php
if($_SESSION["username"]) {
?>
<?php
}else echo "<h1>Please login first .</h1>";
?>
<h1 align="center"style ="color:black;">Welcome To Library</h1><br />
<div style="padding:30px">
        <table width="100%">
            <tr>
                
                <td align="left">
                    <h1 style= "font-size:400%;color: Cornsilk;">HOME</h1>
                </td>
                <td align = "right" width="50%" class="lime">
                    <div style= "font-size:150%;">
                    <a href="viewprofile.php" style ="color:   #EF5C6B;"><?php echo $_SESSION["username"]; ?></a><br>
                        <a href= "addbook.php" style ="color:#EF5C6B;">Add Book</a><br>
                        <a href= "index.php" style ="color:#EF5C6B;">Search Book</a><br>
                        <a href= "updatesearch.php" style ="color:#EF5C6B;">Update Book</a><br>
                        <a href= "delete.php" style ="color:#EF5C6B;">Delete Book</a><br>
                        <a href= "shift.php" style ="color:#EF5C6B;">Shifting Time</a><br>
                        <a href= "datainput.php" style ="color:#EF5C6B;">borrow Book</a><br>
                        <a href='../controller/logout.php'style ="color:#EF5C6B;">Log Out</a>
                    </div>
                </td>
            </tr>
        </table>
    </div>





        
</body>
</html>

<?php
   include('footer.php');
?>
