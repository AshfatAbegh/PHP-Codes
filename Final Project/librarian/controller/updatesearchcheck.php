<?php
    session_start();
    $message="";

               
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','project') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM book WHERE bookname='" . $_POST["bookname"] . "'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["bookname"] = $row['bookname'];
        } 
   

        else {
             echo "Invalid Bookname ";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:../view/searchpage.php");
    }

?>
