<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
   

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

       if(isset($_POST['submit'])){
        if($username <= 5){
            if($password == $cpassword){
                echo "Welcome User !!!";
            }
            else{
                echo "Login Failed !!!";
            }
        }
       }

       echo"<br><br>";

        
    if(isset($_POST['email']) ==true && empty($_POST['email']) ==false){
        $email =$_POST['email'];
        if(filter_var($email, FILTER_VALIDATE_EMAIL) ==TRUE){
            echo 'Valid Email !';
        }
        else{
            echo 'Invalid Email !';
        }
       }

    echo "<br><br>";


            $firstname = test($_POST['firstname']);
         
            $lastname = test($_POST['lastname']);

            $gender = test($_POST['gender']);

            $dateofBirth = test($_POST['dob']);

            $religion = test($_POST['religion']);

            $presentaddress = test($_POST['paddress']);


            if (empty($firstname) or empty($lastname) or empty($dateofBirth) or empty($gender) or empty($religion) or empty($presentaddress)) {
                echo "Please Enter the required field";

               
            }
           
            else {
                echo "First Name: " . $firstname;
                echo "<br><br>";
                echo "Last Name: " . $lastname;
                echo "<br><br>";
                echo "Gender: " . $gender;
                echo "<br><br>";
                echo "DateofBirth: " . $dateofBirth;
                echo "<br><br>";
                echo "Religion: " . $religion;
                echo "<br><br>";
                echo "Present Address:" . $presentaddress;
            }
        }


?>
</body>
</html>



