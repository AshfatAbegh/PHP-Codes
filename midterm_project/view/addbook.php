<?php  
 $message = '';  
 $error = '';
 $bookid=$bookname=$authorname=$publishdate="";
 $booknameErr=$authornameErr=$publishdateErr=$bookidErr="";  
 if(isset($_POST["submit"]))  
 {  

      if(empty($_POST["bookid"]))  
      {  
           $bookidErr = "Field can not be empty!";  
             $flag=true;
      }  


      if(empty($_POST["bookname"]))  
      {  
           
           $booknameErr = "Field can not be empty!"; 
           $flag=true;
      }  
      if(empty($_POST["authorname"]))  
      {  
           $authornameErr = "Field can not be empty!"; 
             $flag=true;
      }  
      if(empty($_POST["publishdate"]))  
      {  
           $publishdateErr = "Field can not be empty!";  
             $flag=true;
      }  
      

      
      else  
      {  
           if(file_exists('../data2.json'))  
           {  
                $current_data = file_get_contents('../data2.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array( 
                    'bookid'            =>$_POST['bookid'],
                    'bookname'               =>     $_POST['bookname'], 
                    'authorname'               =>     $_POST['authorname'],
                    'publishdate'          =>     $_POST["publishdate"]
                     
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('../data2.json', $final_data))  
                {  
                     $message = "Book Added Successfull";  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
      } 

 }  
 //header('location: ../view/addbookhtml.php');
 ?>  
 
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Add Book</title>  
           
      </head>              
         <form action="<?php htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST">               
                
         <br /><br />
          <form>

          <fieldset>

        <legend>Book Information:</legend>
        <label for="bookid">Book Id:</label>
          <input type="text" name="bookid" id="bookid" > 
          <spam style="color:red"><?php echo $bookidErr;?></spam>
          <br><br>
        <label for="bookname">Book name:</label>
          <input type="text" name="bookname" id="bookname" > 
          <spam style="color:red"><?php echo $booknameErr;?></spam>
          
          <br><br>
          <label for="authorname">Author name:</label>
          <input type="text" name="authorname" id="authorname" > 
          <spam style="color:red"><?php echo $authornameErr;?></spam>
         <br> <br>
          <label for="publishdate">Publish Date:</label>
          <input type="text" name="publishdate" id="publishdate" > 
          <spam style="color:red"><?php echo $publishdateErr;?></spam>

        <br>
        
          <br><br>
        
        </fieldset>
        <br><br>

        <input type="submit" name="submit" value="Add">
        <?php echo $message; ?>
        <br><br>
        <a href="homepage.php"> Home</a><br><br>
        <a href="searchhtml.php"> Search Book</a><br>
         </form> 
        <br><br>

           <br>  
      </body>  
 </html>  
 <?php

    include('footer.php');
    ?>