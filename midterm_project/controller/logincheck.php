<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$password = $_POST['password'];
		if ($uname == "" || $password == "") {
			echo "Null submission";
		}
		else
		{
			
        	$myfile = fopen('../library.json', 'r');
        	$data = fread($myfile, filesize('../library.json'));
        	fclose($myfile);
			$all_library = json_decode($data,true);

			for($i = 0; $i < sizeof($all_library); $i++) {
				if($all_library[$i]['username'] == $uname)
				{
					$user = $all_library[$i];
					break;
				}
				
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

		}
	}
?>