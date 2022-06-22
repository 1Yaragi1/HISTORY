<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страница Входа</title>
	<link rel="stylesheet" href="css/login.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="login">
			<div class="container">
				<div class="login__row">
					<div class="login__head">
					<div class="login__logo"><a href="index.html"><img src="img/icon/logo.png" alt=""></a></div>
					<a href="#">Вход</a>
				</div>

				<form action="php/login2.php" method="post">
					<div class="login__enters">
						<div class="login__enter">
							<input type="text" name="login" placeholder="Введите логин" required>
						</div>
						<div class="login__enter">
							<input type="password" name="password" placeholder="Введите пароль" required>
						</div>
						<button class="login__btn" type="submit">Войти</button>
						<div class="login__signup">
						<a href="signup.php" >Регистрация?</a>
						<a href="#" >Забыли пароль?</a>
							<?php
								if ($_SESSION['message']){
									echo '<p class="login__msg"> ' .$_SESSION['message'] . ' </p>';
								}
								unset($_SESSION['message']);
							?> 
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>