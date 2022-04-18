<?php

$con = mysqli_connect('127.0.0.1:3306','root','','project') or die('Unable To connect');

session_start();

if(!isset($_SESSION["bookname"]))
{
  header("Location: login.php");
}


$uName = $uPass = $uPub=$message = " ";

$olduName = $_SESSION["bookname"];


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST['bookname']))
	{
		$uName = mysqli_real_escape_string($con, $_POST['bookname']);
	}
	if(!empty($_POST['authorname']))
	{
		$uPass = mysqli_real_escape_string($con, $_POST['authorname']);
	}
  if(!empty($_POST['publishdate']))
	{
		$uPub = mysqli_real_escape_string($con, $_POST['publishdate']);
	}
$sql = "UPDATE book
SET bookname = '$uName', authorname = '$uPass' , publishdate= '$uPub'
WHERE bookname = '$olduName' ";

mysqli_query($con , $sql);


 echo "Book info is Updated";



}
elseif($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['bookname']) && empty($_POST['authorname']) && empty($_POST['publishdate'])) {
        echo "All field are required.";}
      }




?>

