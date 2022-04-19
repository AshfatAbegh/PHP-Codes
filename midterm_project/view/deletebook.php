<?php
  $title = "Delete Book";
  include('header.php');
  $bookid = $_COOKIE['bookid'];
  //$bid = $_COOKIE['bid'];
if ($_COOKIE['flag'] == true) {
  $myfile = fopen('../library.json', 'r');
    $data = fread($myfile, filesize('../library.json'));
    fclose($myfile);
  $all_book = json_decode($data,true);

  for($i = 0; $i < sizeof($all_book); $i++) {
    if($all_book[$i]['bookid'] == $bookid){
      $index = $i;}
  }

?>

</head>
<body>

                       <br><br><br> <a href='../controller/logout.php'>Log Out</a><br>
                       <br><br> <a href='../view/homepage.php'>Home </a><br>
                       <br><br> <a href='../view/viewbook.php'>View Book </a><br>
                        <!--<a href="viewprofile.php" style ="color:RosyBrown;"> Back</a><br>-->


  <center>
      <form method="POST" action="../controller/deletecheck.php" >
        <fieldset style="width:350px">
          <h1 align ="center"><strong>Delete Book</strong></h1>
          <strong>Book Id</strong><br>
          <input type="text" name="bookid" value=""><br><br>
          

          <input type="submit" name="submit" value="Delete"><br><hr>
          <!--<a href="viewbook.php"><button type="button">Add Book</button></a>-->
        </fieldset>
      </form>
    </center>



  <?php }
  include('footer.php');
  ?>

