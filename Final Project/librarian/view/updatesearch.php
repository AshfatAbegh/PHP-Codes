<?php
  $title = "Search Update";
   include('header.php');
?>

<link rel="stylesheet" href="css/updatesearch.css">
</head>

    <table>
      <tr>
                    <h1 align ="center" color: black;>Library</h1>
      
      </tr>
    </table>
  
    <center>
      <form method="POST" action="../controller/updatesearchcheck.php"  onsubmit="return isValid()" name="mForm" id="nForm">
       <fieldset style="width:350px">
        
          <h1 align ="center"><strong>Search Book</strong></h1>
          <!--<h2 align="center">Welcome!</h2>-->
          <strong>Book Name</strong><br>
          <input type="text" name="bookname" value=""><br><br>
          
          
          <input type="submit" name="submit" value="Search"><br><hr>
         
         </fieldset> 
        
      </form>
    </center>

    <div align = "right">
         <button style="margin-right:16%;" class="btn btn-info" onclick="window.location.href = 'homepage.php';">Back to Profile</button>
      </div>
  
  <?php

  include('footer.php');
  ?>