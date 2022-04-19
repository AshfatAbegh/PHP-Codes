<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$new_pass = $_POST['newpass'];
		$confirm_pass = $_POST['conpass'];

		//$checknew =1;
		//$checkcon = 1;
		$old = null;

		$jsonString = file_get_contents('../library.json');
			$all_library = json_decode($jsonString);

			for($i = 0; $i < sizeof($all_library); $i++) {
					if($all_library[$i]->uname == $uname){

			$old = $i;

				$all_library[$old]->password =  $new_pass;

				$curr_user = json_encode($all_library);
				
			file_put_contents('../library.json', $curr_user);
			
			header('location: ../view/login.php');
		}
		
	}

}
	

?>

