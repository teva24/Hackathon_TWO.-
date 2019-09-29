<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="utf-8"> 
 <title>Регистрация</title>
<link href="style/style.css" media="screen" rel="stylesheet" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'rel='stylesheet' type='text/css'>
<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
	</head>
	<body>
<div class="register">
<div id="login">
 <h1 class="reg-title">Регистрация</h1>
<form action="signup.php" id="registerform" method="post" name="registerform">
 <p><label for="last_name">Фамилия<br>
 <input class="input" id="last_name" name="last_name" size="32" type="text" value=""></label></p>
 <p><label for="first_name">Имя<br>
 <input class="input" id="first_name" name="first_name" size="32" type="text" value=""></label></p>
 <p><label for="phone">Телефон<br>
 <input class="input" id="phone" name="phone" size="32" type="phone" value=""></label></p>
<p><label for="user_email">E-mail<br>
<input class="input" id="email" name="email" size="32"type="email" value=""></label></p>
<p><label for="user_pass">Пароль<br>
<input class="input" id="password" name="password"size="32"   type="password" value=""></label></p>
<p class="submit">
 
<input class="button" id="signup" name= "signup" type="submit" value="Зарегистрироваться"></p>
 </form>
</div>
        </div>
</body>

</html>
    <?php
require_once 'php/connection.php';
    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка" . mysqli_error($link));
	if(isset($_POST["signup"])){
	if(!empty($_POST['last_name']) && !empty($_POST['first_name']) && !empty($_POST['email']) && !empty($_POST['password'])) {
  $last_name= htmlspecialchars($_POST['last_name']);
	$first_name=htmlspecialchars($_POST['first_name']);
        $phone=htmlspecialchars($_POST['phone']);
        $email=htmlspecialchars($_POST['email']);
 $password=htmlspecialchars($_POST['password']);
        $query=mysqli_query($link, "SELECT max(user_id) FROM _user");
        $result = $query->fetch_row();
        $login=($result[0]+1) . "1";
 $query=mysqli_query($link, "SELECT * FROM _user WHERE email='.$email.'");
  $numrows=mysqli_num_rows($query);
        $password=md5($password);
if($numrows==0)
   {
	$sql="INSERT INTO _user
  (login,email,password,first_name,last_name,phone, verification)
	VALUES('$login','$email', '$password', '$first_name','$last_name','$phone',0)";
  $result=mysqli_query($link, $sql);
 if($result){
	echo  "Регистрация прошла успешно";
     header( "Location: index.php" );
    
   function Send_Mail($to,$subject,$body)
 {
require 'class.phpmailer.php';
 $from       = "MrTeva24@gmail.com";
 $mail       = new PHPMailer();
 $mail->IsSMTP(true);            // используем протокол SMTP
 $mail->IsHTML(true);
 $mail->SMTPAuth   = true;                  // разрешить SMTP аутентификацию 
 $mail->Host       = "localhost"; // SMTP хост
 $mail->Port       =  8080;                    // устанавливаем SMTP порт
 $mail->Username   = "root";  //имя пользователя SMTP  
 $mail->Password   = "Vadim";  // SMTP пароль
 $mail->SetFrom($from, 'From Name');
 $mail->AddReplyTo($from,'From Name');
 $mail->Subject    = $subject;
 $mail->MsgHTML($body);
 $address = $to;
 $mail->AddAddress($address, $to);
 $mail->Send(); }
$to=$email;
 $subject="Подтверждение электронной почты";
 $body='Здравствуйте!'; 
} else {
 echo  "Ошибка в добавлении данных";
  }
	} else {
	echo  "Такой пользователь уже существует";
   }
	} else {
	echo  "Все поля защещены";
	}
	}
mysqli_close($link);
	?>