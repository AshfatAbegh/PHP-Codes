<?php

include "includes/db_connect.inc.php";

$bookname = $status = $message = $bookInDB = "" ;

if($_SERVER["REQUEST_METHOD"] =="POST")
{
if(!empty($_POST['bookname'])){
  $bookname = mysqli_real_escape_string($conn, $_POST['bookname']);
}
if(!empty($_POST['availability']))
{
  $status = mysqli_real_escape_string($conn, $_POST['availability']);
}

$sqlUserCheck = "SELECT book_name FROM library WHERE book_name = '$bookname'";
$result = mysqli_query($conn, $sqlUserCheck) or die( mysqli_error($conn));


while($row = mysqli_fetch_assoc($result))
{
   $bookInDB = $row['book_name'];
}
   if($bookInDB == $bookname)
{
       $message = "Already exists!!";
}
  else
   {
      $sql =   "INSERT INTO `library` (`book_name`, `book_status`) VALUES ('$bookname','$status');";
       mysqli_query($conn, $sql) or die( mysqli_error($conn));

          $message = "Added";
}
}
?>

<!DOCTYPE html>
 <html>
      <head>
           <h1 align ="center"><u>Add Book</u></h1>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      </head>
      <body style="background-color:lightblue">
        <br>
        <br>
      <form action="addbook.php" method="post">
        <div class="container" style="width:380px;">
          <br>
          <br>
          <br>
          <br>
          <br>
                     <label>Book Name</label>
                     <input type="text" name="bookname" class="form-control" required/>
                     <br>
                     <label>Status</label>
                     <input type="radio" id="available" name="availability" value="available" required>Available
                     <input type="radio" id="NotAvailable" name="availability" value="NotAvailable" required>Not Available
                     <br>
                     <br>
                     <br>

      <input style="margin-left:15%;" type="reset" name="btn_reset" class="btn btn-info"/>
      <span style="color:red"><?php echo $message?></span>
      <button style="margin-left:20%;" type="submit" name="btn_submit" class="btn btn-info"/>Add</button>
       </div>
                </form>

           <div align = "right">
           <button style="margin:30px; margin-right:20%;" type="submit" name="button" class="btn btn-info" value = "button" onclick="window.location.href = 'managelibrary.html';">Back To Management</button>
             </div>
      </body>
 </html>
