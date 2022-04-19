<?php
	session_start();
	if(isset($_POST['submit']))
	{
		$bid = $_POST['bid'];
		if ($bid == "" ) {
			echo "Null submission";
		}
		else
		{
			$myfile = fopen('../data2.json', 'r');
        	$data = fread($myfile, filesize('../data2.json'));
        	fclose($myfile);
			$all_book = json_decode($data,true);

			for($i = 0; $i < sizeof($all_book); $i++) {
				if($all_book[$i]['bookid'] == $bid)
				{
					$user = $all_book[$i];
					break;
				}
				
			}

			if($bid == $user['bookid']){
				
				setcookie('flag', true, time()+(60*5), '/');
				setcookie('bookid', $user['bookid'], time()+(60*5), '/');
			
			header('location: ../view/viewbook.php');
			}
			else
			{
				echo "Invalid User";
			}

		}
	}
?>