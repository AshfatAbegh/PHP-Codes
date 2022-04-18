<script type="text/javascript" src="js/login.js"></script>
</head>
<body style="background-color:lightgrey;">
    <table>
      <tr>
                    <h1 color: black;>Library</h1>
        <label>Don't have an account?
        <a href="../view/registrationhtml.php">Sign Up</a></div>
      </tr>
    </table>
  
    <center>
      <form method="POST" action="controller/loginvalidation.php" onsubmit="return isValid()" name="mForm" id="nForm" >
        <fieldset>
          <h1 align ="center"><strong>LOGIN</strong></h1>
          <!--<h2 align="center">Welcome!</h2>-->
          <strong>User Name</strong><br>
          <input type="text" name="username" value=""><br><br>
          <strong>Password </strong><br>
          <input type="password" name="password" value=""><br><br>
          
          <br><input type="checkbox" name="remember">Remember Me<br><br>
          <input type="submit" name="submit" value="Log in"><br><hr>
          <label>New  <i>Member</i>?</label>
          <a href="change_pass.php">Forgot Your Passsword?</a><br><hr>
          <a href="../view/registrationhtml.php">Sign Up</a></label>
        </fieldset>
      </form>
    </center>
 