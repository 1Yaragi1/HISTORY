<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Страница Регистрации</title>
	<link rel="stylesheet" href="css/signup.css">
	<link href="https://fonts.googleapis.com/css2?family=Nunito&family=Tiro+Gurmukhi&display=swap" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<div class="signup">
			<div class="container">
				<div class="signup__row">
					<div class="signup__head">
					<div class="signup__logo"><a href="index.html"><img src="img/icon/logo.png" alt=""></a></div>
					<a href="#">Регистрация</a>
				</div>

				<form action="php/signup2.php" method="post">
					<div class="signup__enters">
						<div class="signup__enter">
							<input type="text" placeholder="Введите логин"  name="login" id="login">
								<?php
									if ($_SESSION['message2']){
										echo '<p class="signup__msg2"> ' .$_SESSION['message2'] . ' </p>';
									}
									unset($_SESSION['message2']);
								 ?>
							
						</div>
						<div class="signup__enter">
							<input type="email" placeholder="Введите почту"  name="email" id="email">
								<?php
									if ($_SESSION['message3']){
										echo '<p class="signup__msg3"> ' .$_SESSION['message3'] . ' </p>';
									}
									unset($_SESSION['message3']);
								?>
						</div>
						<div class="signup__enter">
							<input type="password" placeholder="Введите пароль"  name="password" id="password">
						</div>
						<div class="signup__enter">
							<input type="password" placeholder="Повторите пароль"  name="password_2" id="password_2">
						</div>
						<?php
							if ($_SESSION['message']){
								echo '<p class="signup__msg"> ' .$_SESSION['message'] . ' </p>';
							}
							unset($_SESSION['message']);
						?>
						
					
						<button name="do_signup" class="signup__btn" type="submit">Зарегистрировать</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>