<?php
  session_start();
  if(isset($_POST['submit']))
  {
    $bookid = $_POST['bookid'];
    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $publishdate = $_POST['publishdate'];
    


    if ($bookid == "" || $bookname == "" || $authorname== "" || $publishdate=="" )
    {
      echo "null submission" . "<br>";
    }

    else{
        $jsonString = file_get_contents('../data2.json');
      $all_book = json_decode($jsonString);

      for($i = 0; $i < sizeof($all_book); $i++) {
          if($all_book[$i]->bookid == $bookid){

      $old = $i;
      break;}
        }   
            $all_book[$old]->bookid =  $bookid;
            $all_book[$old]->bookname =  $bookname;
            $all_book[$old]->authorname =  $authorname;
            $all_book[$old]->publishdate =  $publishdate;
            
    

      $curr_user = json_encode($all_book);
      file_put_contents('../data2.json', $curr_user);


        header('location: ../view/homepage.php');
      }
  }

?>

