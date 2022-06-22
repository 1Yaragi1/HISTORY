<?php
	session_start();


	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']),
	FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']),
	FILTER_SANITIZE_STRING);
	$password_2 = filter_var(trim($_POST['password_2']),
	FILTER_SANITIZE_STRING);



	if ($password === $password_2){

		mysqli_query("INSERT INTO `users` (`id`, `login`, `email`, `password`) VALUES (NULL, '$login', '$email', '$password')");

		$_SESSION['message'] = 'Регистрация прошла успешна!';
		header('Location: ../login.php');
	} else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../signup.php');
	}


	if(mb_strlen($login) < 4 || mb_strlen($login) > 90){
		$_SESSION['message2'] = 'Недопустимая длина логина';
		header('Location: ../signup.php');
		exit();
	} else if(mb_strlen($email) < 8 || mb_strlen($email) > 80){
		$_SESSION['message3'] = 'Недопустимая запись почты';
		header('Location: ../signup.php');
		exit();
	} else if(mb_strlen($password) < 2 || mb_strlen($password) > 20){
		echo "Недопустимая длина пароля (от 1 до 10 символов)";
		exit();
	} 
	else if(mb_strlen($password_2) < 2 || mb_strlen($password_2) > 20){
		echo "Недопустимая длина пароля (от 1 до 10 символов)";
		exit();
	}

	$mysql = mysqli_connect('HISTORY','root','root','registration');
	if(!$mysql){
		die('Error connect to database');
	}
	$mysql->query("INSERT INTO `users` (`login`, `email`, `password`) VALUES('$login', '$email', '$password')");
	$mysql->close();

	

?>