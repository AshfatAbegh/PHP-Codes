<?php
  $title = "Update Book";
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
                       <br><br><br> <a href='../view/homepage.php'>Home </a><br>
                       <br><br><br> <a href='../view/viewbook.php'>View Book </a><br>
                        <!--<a href="viewprofile.php" style ="color:RosyBrown;"> Back</a><br>-->

    <center>
      <form method="POST" action="../controller/updatebookcheck.php" >
        <fieldset>
        
          <h2>Update Book Details</h2>
          <input type="text" name="bookid" placeholder="Book Id" value=""><br>
          <h4></h4>
          <input type="text" name="bookname" placeholder="Book Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="authorname" placeholder="Author Name" value="" />   <br><br> 
          <input type="text" name="publishdate" placeholder="Publish Date" value="" />   <br><br>  
          <input type="submit" name="submit" value="Update"><br><br>
        </fieldset>
      </form>
    </center>

  <?php }
  include('footer.php');
  ?>

