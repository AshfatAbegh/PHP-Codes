<?php
  $title = "Edit Profile";
  include('header.php');
  $name = $_COOKIE['name'];
if ($_COOKIE['flag'] == true) {
  $myfile = fopen('../library.json', 'r');
    $data = fread($myfile, filesize('../library.json'));
    fclose($myfile);
  $all_library = json_decode($data,true);

  for($i = 0; $i < sizeof($all_library); $i++) {
    if($all_library[$i]['name'] == $name){
      $index = $i;}
  }

?>

</head>
<body>

                       <br><br><br> <a href='../controller/logout.php'style ="color:RosyBrown;">Log Out</a><br>
                        <a href="viewprofile.php" style ="color:RosyBrown;"> Back</a><br>

    <center>
      <form method="POST" action="../controller/editprofilecheck.php" >
        <fieldset>
        
          <h2>Edit Profile</h2>
          <input type="text" name="name" placeholder="Name" value=""><br>
          <h4></h4>
          <input type="text" name="username" placeholder="User Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" value="" />   <br><br>   
          <input type="submit" name="submit" value="Edit Profile"><br><br>
        </fieldset>
      </form>
    </center>

  <?php }
  include('footer.php');
  ?>

