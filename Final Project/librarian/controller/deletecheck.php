<?php
 session_start();

$con = mysqli_connect('127.0.0.1:3306','root','','project') or die('Unable To connect');
$uName = $uPass = $uPub=$message = " ";


if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(!empty($_POST['bookname']))
	{
		$uName = mysqli_real_escape_string($con, $_POST['bookname']);}


$sql = "DELETE from book

WHERE bookname = '$uName' ";

mysqli_query($con , $sql);


 echo "Delete Successful";



}

else
{
	echo "null";
}



?>

