<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
</head>
<body>
      
    <center>

    	  <form action = "Welcome.php" id="form1" name="form1" method="post" novalidate>

    	  	<fieldset>
                <legend><p>Login Form</p></legend>
               <input type="text" name="username" id="uname" placeholder="Please enter your username" value="" required>
               <br><br>
               
               <input type="password" name="password" id="pass" placeholder="Please enter your password" value="" required>
               <br><br>

               <input type="submit" name="submit" value="LOGIN">


    	  	</fieldset>

     </form>
    </center>

</body>
</html>

  <?php 

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
       
      $username = $_POST['username'];
       $password = $_POST['password'];
       $cpassword = $_POST['cpassword'];


        $value=strlen($username);

         if(isset($_POST['submit'])){

         if($value>=5){
            if($password == $cpassword){
                echo "Welcome User !!!";
            }
            else{
                 echo "Login Failed !!!";
            }
        }
            else{
                echo "Login Failed !!!";
            }
       }
   }
 ?>