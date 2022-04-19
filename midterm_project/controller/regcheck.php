<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$name = $_POST['name'];
		$password = $_POST['pass'];
		$mail = $_POST['email'];
		$uname = $_POST['uname'];
		$con_password = $_POST['cpass'];


		$checkun =1;
		$checkn =1;
		$checkp =1;
		$checkm = 1;

		$dot = 0;
		$at = 0;

		if ($name == "" || $password == "" || $mail == "" || $uname== "" || $con_password == ""){
			echo "null submission" . "<br>";
		}

		

        if ($checkn == 0 && $checkp == 0 && $checkm == 0 && $checkun == 0) {

        	$myfile = fopen('../model/donors.json', 'r');
        	$data = fread($myfile, filesize('../model/donors.json'));
        	fclose($myfile);
			$old_donors = json_decode($data,true);

        	$user = [
        					'name' => $name,
							'username'=>$uname, 
							'password'=>$password, 
							'email'=> $mail,
							'type' => $type,
							'teleno' => "",
							'address' => "",
							'gender' => "",
							'dateofbirth' => ""
						];

			$new_donors = $old_donors;
			array_push($new_donors, $user);


			$curr_user = json_encode($new_donors);
			$myfile = fopen('../model/donors.json', 'w');
			fwrite($myfile, $curr_user);
			fclose($myfile);

			$_SESSION['password'] = $password;
			header('location: ../view/login.php');
			}
	}

?>

