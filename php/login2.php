<?php
	session_start();


	//signup2 code

	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);


	$mysql = mysqli_connect('HISTORY','root','root','registration');
	if(!$mysql){
		die('Error connect to database');
	}
	// mysqli_query("INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");
	$mysql->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES('$login', '$email', '$password')");
	// $mysql->close();

	//signup2 code end




	$check_user = mysqli_query($mysql, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
	if (mysqli_num_rows($check_user) > 0){

		$user = mysqli_fetch_assoc($check_user);

		$_SESSION['user'] = [
			"login" => $user['login']
		];

		header('Location: ../index2.php');
	} else{
		$_SESSION['message'] = 'Неверный логин или пароль';
		header('Location: ../login.php');
	}

?>

<pre>
	<?php
		print_r($check_user);
		print_r($user);

	?>
</pre>