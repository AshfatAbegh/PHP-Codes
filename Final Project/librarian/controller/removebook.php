<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["bookname"]);
header("Location:../view/updatesearch.php");
?>