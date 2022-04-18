<?php
  $title = "Sign Up";
  include('header.php');
?>
<script type="text/javascript" src="js/registration.js"></script>

</head>
<body style="background-color: LightGoldenrodYellow;">
 <h1 color: black;>Library</h1>
            <label>Already have an account?
            <a href="login.php">Sign In</a></label>
             
    <center>
      <form method="POST" action="../controller/done_registration.php" onsubmit="return isValid()" name="mForm" id="nForm" >
          <fieldset>
          <h2>Sign Up</h2>
          <input type="text" name="name" placeholder="Name" ><br>
          <span style="color:red" id="nameErr"> </span>
          <h4></h4>
          <input type="text" name="username" placeholder="User Name" >   <br>
           <span style="color:red" id="usernameErr"> </span>
          <h4></h4>
          <input type="text" name="email" placeholder="Email" >   <br>
           <span style="color:red" id="emailErr"> </span>
          <h4></h4>
          <input type="password" name="password" placeholder="Passsword" ><br>
           <span style="color:red" id="passwordErr"> </span>
          <h4></h4>
          <input type="password" name="cpass" placeholder="Confirm Passsword" ><br><br>
           <span style="color:red" id="cpassErr"> </span>
  
          
          <input type="submit" name="submit"  value="Create Account">
        </fieldset>
      </center>
      </form>
  <?php

  include('footer.php');
  ?></div>
