<?php
  $title = "Add Book";
  include('header.php');
?>


<script type="text/javascript" src="js/addbook.js"></script>
<link rel="stylesheet" href="css/addbook.css">

</head>
<body>
                    <h1  align="center" style= "font-size:400%;color: Cornsilk;">Library</h1>
                

            
           
    <center>
      <form method="POST" action="../controller/addbookcheck.php" onsubmit="return isValid()" name="mForm" id="nForm" >
           <fieldset style="width:350px">
          <h2>Add Book</h2>
          <input type="text" name="bookname" placeholder="Book Name" value=""><br>
          <h4></h4>
          <input type="text" name="authorname" placeholder="Author Name" value="" />   <br>
          <h4></h4>
          <input type="text" name="publishdate" placeholder="publishdate" value="" />   <br>
          <h4></h4>
         
          <input type="submit" name="submit" value="Add">
        </fieldset>
      </center>
      </form>

      <div align = "right">
         <button style="margin-right:16%;" class="btn btn-info" onclick="window.location.href = 'homepage.php';">Back to Profile</button>
      </div>
  <?php

  include('footer.php');
  ?></div>
