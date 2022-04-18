<?php
    session_start();
    
    $message="";

              
    if(count($_POST)>0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','project') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM library WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
        $_SESSION["id"] = $row['id'];
        $_SESSION["username"] = $row['username'];
        } 
        else {
        // $message = "Invalid Username or Password!";
             echo "Null submission";
        }
    }
    if(isset($_SESSION["id"])) {
    header("Location:../view/homepage.php");
    }

     
                
            if(($uname == $user['username']) && ($password == $user['password'])){
                
            if($_POST['remember'] == "remember")
            {

                setcookie('flag', true, time()+(24*60*60), '/');
                setcookie('name', $user['name'], time()+(24*60*60), '/');
                setcookie('username', $user['username'], time()+(24*60*60), '/');
                setcookie('password', $user['password'], time()+(24*60*60), '/');

            }
            else{
                setcookie('flag', true, time()+(60*5), '/');
                setcookie('name', $user['name'], time()+(60*50), '/');
                setcookie('username', $user['username'], time()+(60*5), '/');
                setcookie('password', $user['password'], time()+(60*5), '/');
            }
            header('location: ../view/homepage.php');
            }
            else
            {
                echo "Invalid User";
            }

?>
