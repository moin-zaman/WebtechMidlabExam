<?php 
	session_start();
    $user= "";
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	if ($username == null || $password == null) {
		echo "invalid username/password <br>";
	}else{
		$file = fopen('user.txt', 'r');
		while (!feof($file)) {
            if (isset($_REQUEST["use"])){


                $user=$_REQUEST["use"];

            }
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($username == trim($user[0]) && $password == trim($user[1])){
					setcookie('status', 'true', time()+3600, '/');
					header('location: home.php');
				}
		}
		echo "invalid user!";
	}



?>