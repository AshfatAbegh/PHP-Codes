<?php  
 session_start();

if (isset($_POST['submit'])) {
    if (isset($_POST['bookname']) && isset($_POST['authorname']) &&
        isset($_POST['publishdate'])) {
        
        $bookname = $_POST['bookname'];
        $authorname = $_POST['authorname'];
        $publishdate = $_POST['publishdate'];
      
      
        $conn = new mysqli("localhost","root","","project");
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
      
      else  
      {  $Select = "SELECT bookname FROM book WHERE bookname = ? LIMIT 1";
            $Insert = "INSERT INTO book(bookname, authorname, publishdate) values(?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $bookname);
            $stmt->execute();
            $stmt->bind_result($resultBookname);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sss",$bookname, $authorname, $publishdate);
                if ($stmt->execute()) {
                    echo "New record inserted sucessfully.";
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "All field are required.";;
            }
            $stmt->close();
            $conn->close();
        }

    
   
}

else {
    header("Location:../view/index.php");
        
    }
      }  

 ?>  
