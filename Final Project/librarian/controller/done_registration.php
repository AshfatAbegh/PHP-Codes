<?php  
if (isset( $_POST['submit'])) {
    if (empty($_POST['name']) && empty($_POST['password']) &&
        empty($_POST['email']) && empty( $_POST['username']) &&
        empty( $_POST['cpass'])) {
        echo "All field are required.";}


elseif (isset($_POST['submit'])) {
    if (isset($_POST['name']) && isset($_POST['password']) &&
        isset($_POST['email']) && isset($_POST['username']) &&
        isset($_POST['cpass'])) {
        
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $cpass = $_POST['cpass'];
       
        $conn = new mysqli("localhost","root","","project");
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
      
      else  
      {  $Select = "SELECT username FROM library WHERE username = ? LIMIT 1";
            $Insert = "INSERT INTO library(name, password, email, username, cpass) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $stmt->bind_result($resultUsername);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss",$name, $password, $email, $username, $cpass);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this user.";
            }
            $stmt->close();
            $conn->close();
        }
    
 
}

else {
    echo "Submit button is not set";
}

      }  

}
header("Location:../view/login.php");
 ?>  
