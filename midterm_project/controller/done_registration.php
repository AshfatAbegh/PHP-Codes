<?php  
 $message = '';  
 $error = '';
 $nameErr=$passwwordErr=$emailErr=$usernameErr=$cpassErr="";  
 if(isset($_POST["submit"]))  
 {  
      //$message = $_POST['message'];
          if ($message == "" ) {
               echo "Null submission";
                }
      if(empty($_POST["name"]))  
      {  
           $nameErr = "<label class='text-danger'>Enter Name</label>";  
      }  
      if(empty($_POST["password"]))  
      {  
           $passwordErr = "<label class='text-danger'>Enter Password</label>";  
      }  
      if(empty($_POST["email"]))  
      {  
           $emailErr = "Email is not validated!";  
      }  
      if(empty($_POST["username"]))
        {
          $usernameErr="Field can not be empty!";
          $flag=true;
        }

        if(empty($_POST["cpass"]))
        {
          $cpassErr="Field can not be empty!";
          $flag=true;
        }
        

      
      else  
      {  
           if(file_exists('../library.json'))  
           {  
                $current_data = file_get_contents('../library.json');  //read json file
                $array_data = json_decode($current_data, true);  //decode json file
                $extra = array(  
                    'name'               =>     $_POST['name'], 
                    'password'               =>     $_POST['password'],
                    'email'          =>     $_POST["email"],
                    'username'          =>     $_POST["username"], 
                    'cpass'          =>     $_POST["cpass"]
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../library.json', $final_data))  
                {  
                     $message = "<label class='text-success'>Registration Successfull</p>";  
                }  
                // $message = "<label class='text-success'>Registration Successfull</p>"; 
                header('location: ../view/login.php');
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           } 

      }  
 }  
 ?>  
