<html>
  <head>
    <br>
    <br>
    <br>
    <br>
    <br>

    <script type="text/javascript" src="js/viewprofile.js"></script>
    
  </head>

  <body style="background-color:lightblue">
    <div align="center">
  <img src="../model/1.png" alt="../model/1.png" width="100px"></img><br><br>
  </div>

<center>
	<form action="../controller/editprofile.php" method="post" onsubmit="return isValid()" name="mForm" id="nForm">
    <h1 align="center"><b>Update Profile</b></h1>
  		<br>
  <div class="container" style="width:380px;">
			<label for="username">New Username: </label>
			<input type="text" name="username"  >
      <br><br>
			<label for="password">New Password: </label>
			<input type="text" name="password"  ><br>
      <br>
        <div align ="center">
          <input style="margin-left:15%;" type="reset" name="btn_reset" class="btn btn-info"/>
			<button style="margin-left:20%;" type="submit" name="login" class="btn btn-info">Update </button>
</div>
</div>

	</form>

  <br>
  <div align = "right">
         <button style="margin-right:16%;" class="btn btn-info" onclick="window.location.href = 'login.php';">Back to Profile</button>
  		</div>

<center>

  </body>
</html>
