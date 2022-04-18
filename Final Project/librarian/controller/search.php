<?php

    $conn=  mysqli_connect("localhost", "root", "", "project");
        if(!$conn)
       {
           die('not connected');
       }


else{

if($_SERVER['REQUEST_METHOD']==="POST")
{
    if(empty($_POST['Search'])){
        echo"<h4 stlye='colour:red'>Search Field Empty</h4>";
    }
  }
if(isset($_POST['Search']))
{
 $searchkey = $_POST['Search'];
    $sql2 = "SELECT * FROM book WHERE bookname LIKE '%$searchkey%'";
 }

 else
 {
     $sql2 = "SELECT * FROM book";

}
}

    $result2 = mysqli_query($conn , $sql2);

  while( $row = mysqli_fetch_assoc($result2) ):
  ?>
   <table id="table" border=".5" width = "3%" height = "5%">
  <tr>
              <td align="center"><?php echo $row['bookname'] ?></td>
              <td align="center"><?php echo $row['authorname'] ?></td>
              <td align="center"><?php echo $row['publishdate'] ?></td>
          </tr>
<?php endwhile; ?>