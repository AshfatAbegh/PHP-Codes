<?php
    $title = "Forgot Password";
    include('header.php');
?>
</head>


  
<h1 >Library</h1>
<level>Don't have an account?</level>
<a href="registrationhtml.php">Sign Up</a></div>
<center>
<form method="POST" action="../controller/passcheck.php" >
    <h2>Set A New Password:</h2>
                <table>
                    <tr>
                        <td>
                            <input type='text'  placeholder="User Name" name='username'>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder= "New Password" name='newpass'>
                        </td>
                       
                    </tr>
                    <tr>
                        <td>
                            <input type='password' placeholder="Retype Password" name='conpass'>
                        </td>
                       
                    </tr>
                </table>
                <input type='submit' name="submit" value="Confirm" ><br><br>
            </form>
        </center>


    <?php 
       include('footer.php');
    ?>
    </div>