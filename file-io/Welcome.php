<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome</title>
</head>
<body>
    <center>
    <a href= "login.php">Logout</a>
    </center>

        <?php 
       
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            function test($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
       
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
</body>
</html>