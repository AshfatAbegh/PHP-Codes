<?php
  $title = "Sign Up";
  include('header.php');
?>

</head>
<body>
 <h1 color: black;>Library</h1>
            <label>Already have an account?
            <a href="login.php">Sign In</a></label>
    <center>
      <form method="POST" action="../controller/done_registration.php" >
          <fieldset>
          <h2>Sign Up</h2>
          <input type="text" name="name" placeholder="Name" value=""><br>
          <h4></h4>
          <input type="text" name="username" placeholder="User Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" value="" />   <br>
          <h4></h4>
          <input type="password" name="password" placeholder="Passsword" value=""><br>
          <h4></h4>
          <input type="password" name="cpass" placeholder="Confirm Passsword" value=""><br><br>
         
          <input type="submit" name="submit" value="Create Account">
          <!--<label>By continuing, you agree to the Hope <a href=terms.php>terms</a> and acknowledge receipt of our <a href=ppolicy.php>privacy policy</a>.</label>-->
        </fieldset>
      </center>
      </form>
  <?php

  include('footer.php');
  ?></div>
