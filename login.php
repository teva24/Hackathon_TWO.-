<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css" type="text/css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous">
    </script>
    <title>Авторизация</title>
</head>
<body>
    <div class="login">
		<div class="container">
			<div class="login__inner">
				<form class="" method="post">
					<span class="form-title">
						Добро пожаловать
					</span>

					<div class="-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<label for="email">Email:</label><br>
						<input class="" type="email" name="email" id="email">
						<span class="-input100" data-placeholder="Email"></span>
					</div>

					<div class="-input100 validate-input" data-validate="Enter password">
						<label for="password">Пароль: </label><br>
						<input class="input100" type="password" name="password" id="password"><br>
						<input type="checkbox" name="remember_me" checked="checked" /> Запомнить меня
					</div>

					<div class="">
							<div class="login100-form-bgbtn"></div>
							<input class="button" id="avthorization" name= "avthorization" type="submit" value="Войти">
						</div>
					

					<div class="text-center p-t-115">
						<span class="txt1">
							Нет акаунта?
						</span>

						<a class="txt2" href="signup.php">
							Зарегистрироваться
						</a>
					</div>
					
				</form>
				</div>
			</div>
		</div>
	
	

	<div id="dropDownSelect1"></div>
</body>
</html>
	<?php
    require_once 'php/connection.php';
    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));

    if(isset($_POST['avthorization'])){
if(!empty($_POST['email']) && !empty($_POST['password'])){
      $email=htmlspecialchars($_POST['email']);
 $password=htmlspecialchars($_POST['password']);
      $query=mysqli_query($link, "SELECT password, first_name, last_name, user_id FROM _user where email='$email'");
        $result = $query->fetch_row();
    
 if($result[0]==md5($password)){
	echo  "Успешно";
      session_start();
$_SESSION['user_id'] = $result[3]->ID;
     setcookie("eve",$result[3]);
      header( "Location: index.php" );}}}
    mysqli_close($link);
    
    ?>