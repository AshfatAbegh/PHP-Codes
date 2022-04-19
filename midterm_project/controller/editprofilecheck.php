<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$email = $_POST['email'];
		$username = $_POST['username'];


		if ($name == "" || $email == "" || $username== "" )
		{
			echo "null submission" . "<br>";
		}


        	$jsonString = file_get_contents('../library.json'); //read json file
			$all_library = json_decode($jsonString);     //decode json file

			for($i = 0; $i < sizeof($all_library); $i++) {
					if($all_library[$i]->name == $name){

			$old = $i;
			break;}
				}
        		$all_library[$old]->name =  $name;
        		$all_library[$old]->username =  $username;
        		$all_library[$old]->email =  $email;
        		
		

			$curr_user = json_encode($all_library);
			file_put_contents('../library.json', $curr_user);


				header('location: ../view/homepage.php');
			}
	

?>

