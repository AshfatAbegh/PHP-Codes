<center>
   
     <form id="form1" name="form1" action="RegistrationAction.php" method="post" novalidate>

	  <fieldset>
			<legend><p style="font-size:20px">Personal Information:</p></legend>

			<p style="font-size:30px"><b>Basic Information:</b></p>
		
			<label for="fname">First Name*:</label>
			<input type="text" name="firstname" id="fname" placeholder="Please write your first name" value="" autofocus required>
		
			
       <br><br>
		
			
			<label for="lname">Last Name*:</label>
			<input type="text" name="lastname" id="lname" placeholder="Please enter your last name" value="" required>
		   
	
      <br><br>
			

       <label>Select Gender*:</label>
			<input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label>
			<input type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
      <br><br>
		
	    <label for="dob">Date of Birth*:</label>
		  <input type="date" name="dob" id="dob" size="50" required>
	    <br><br>

	    <label for="religion">Religion*:</label>
	      <select name="religion" id= "religion">
           <option selected value="Islam">Islam</option>
           <option value="hindu">Hindu</option>
           <option value="cristian">Cristian</option>
           <option value="bouddho">Bouddho</option>
        </select>

		

	   <p style="font-size:30px"><b>Contact Information:</b></p>

			
	   <p>Present Address*:<textarea name="paddress" required></textarea></p>

       <p>Permanent Address*:<textarea name="peraddress" required></textarea>
       </p>
            
            <label>Phone:</label>
            <input type="text" name="phone" id="tel" placeholder="Please enter your tel no." value="" required>

            <br><br>

            <label for="email">Email*:</label>
		        <input type="email" name="email" id="email" placeholder="Please enter your email">
		   
            <br><br>

            <p>Personal Website:<a href="https://github.com/AshfatAbegh" target="_blank" name="website">Visit My Website</a></p>

            <p style="font-size:30px"><b>Credentials:</b></p>

            <label>Username*:</label>
            <input type="text" name="username" id="uname" placeholder="Please enter your username" value="" required>
             
            <br><br>

            <label>Password*:</label>
            <input type="password" name="password" id="pass" placeholder="Please enter your password" value="" required>

            <br><br>

            <label>Confirm Password*:</label>
            <input type="password" name="cpassword" id="cpass" placeholder="Please confirm your password" value="" required>
             
            <br><br>
            <input type="submit" name="submit" value="Submit">
	</fieldset>
</form>
</center>
</body>
</html>