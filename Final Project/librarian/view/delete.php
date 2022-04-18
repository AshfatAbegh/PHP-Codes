<html>
  <head>
    <br>
    <br>
    <br>
    <br>
    
    <script type="text/javascript" src="js/deletebook.js"></script>
    <br><link rel="stylesheet" href="css/deletebook.css">
    
  </head>

  

<center>
	<form action="../controller/deletecheck.php" method="post" onsubmit="return isValid()" name="mForm" id="nForm">
    <h1 align="center"><b>Delete Book</b></h1>
  		<br>
  <div class="container" style="width:380px;">
			<label for="bookname">Bookname: </label>
			<input type="text" name="bookname">
      <br><br>

     
        <div align ="center">
          <input style="margin-left:15%;" type="reset" name="btn_reset" class="btn btn-info"/>
			<button style="margin-left:20%;" type="submit" name="login" class="btn btn-info">Delete </button>
</div>
</div>

	</form>

  <br>
  <div align = "right">
         <button style="margin-right:16%;" class="btn btn-info" onclick="window.location.href = 'homepage.php';">Back to Profile</button>
  		</div>

<center>

  </body>
</html>
