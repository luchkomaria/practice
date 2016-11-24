<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="style.css" rel="stylesheet" type="text/css">
<title>Документ без названия</title>
</head>

<body>
<?php
if(isset($_POST['sub'])){
	if(empty($_POST['login'])){
		$login_error="Пустое поле";
	}
	else{
		if(!preg_match("/^[a-zA-Z ]*$/",$_POST['login'])){
			$login_error="Только латинские буквы.";}
		else{ 
			$login = $_POST['login'];}
	}
	if(empty($_POST['password'])){
		$password_error="Пустое поле";  
	}
	else{
		$password = $_POST['password'];
	}
	if(empty($_POST['pass_repeat'])){
		$repeat_error="Пустое поле";  
	}
	else{
		if($_POST['pass_repeat'] != $password){
			$repeat_error = "Пароли не совпадают"; 
		}
		else{
			$pass_repeat = $_POST['pass_repeat'];
		}
	}
	if(empty($_POST['email'])){
		$email_error="Пустое поле";  
	}
	else{
		if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$email_error = "Неверный формат email"; 
		}
		else{
			$email = $_POST['email'];
		}	
	}
	if(empty($_POST['name'])){
		$name_error="Пустое поле";}
	else{
		if(!preg_match("/^[а-яА-ЯЁё]+$/u", $_POST['name'])) {
			$name_error = "Только буквы русского алфавита";
		}
		else{
			$name=$_POST['name'];
		}
	}
	if(empty($_POST['lastname'])){
		$lastname_error="Пустое поле";}
	else{
		if(!preg_match("/^[а-яА-ЯЁё]+$/u", $_POST['lastname'])) {
			$lastname_error = "Только буквы русского алфавита";
		}
		else{
			$lastname=$_POST['lastname'];
		}
	}
	if(empty($_POST['father'])){
		$father_error="Пустое поле";}
	else{
		if(!preg_match("/^[а-яА-ЯЁё]+$/u", $_POST['father'])) {
			$father_error = "Только буквы русского алфавита";
		}
		else{
			$father=$_POST['father'];
		}
	}
	$age = $_POST['age'];
	if(empty($_POST['age'])){
		$father_error="Пустое поле";}
	else{
		if(!preg_match("/^[0-9]+$/u", $_POST['age'])) {
			$age_error = "Только цифры";
		}
		else{
			$age=$_POST['age'];
		}
	}
	$sex = $_POST['sex'];
	$comment = $_POST['comment'];
//$lines = file("logins.txt");
//foreach($lines as $line){
//		$user = explode("|", $line);
//		if($login = $user[0]){
//			$login_error="Пользователь с таким логином уже существует.";
//		}
//		if($email = $user[3] && !empty($_POST['email'])){
//		$email_error="Пользователь с таким email уже существует.";
//		}
//}
	if(!empty($login) && !empty($password) && !empty($email) && !empty($name) && !empty($lastname) && !empty($father) && !empty($age) && !empty($sex) && !empty($comment)){
	$text = $login . "|" . $password . "|" . $email . "|" . $name . "|" . $lastname . "|" . $father . "|" . $age . "|" . $sex . "|" . $comment . "\n";
	$fp = fopen("logins.txt", "a+");
	fwrite($fp, $text);
	fclose ($fp);
	$login=$password=$email=$name= $lastname=$father=$age=$sex= $comment="";
	}
}
if(isset($_POST['reset'])){
	$login=$password=$email=$name= $lastname=$age=$sex= $comment="";
	}
?>
<form method="post">
<div id="container">
<p>Логин:</p><input type="text" name="login" value="<?php echo $login;?>"><label><?php echo $login_error; ?></label>
<p>Пароль:</p><input type="password" name="password"><label><?php echo $password_error; ?></label>
<p>Повторите пароль:</p><input type="password" name="pass_repeat"><label><?php echo $repeat_error; ?></label>
<p>E-mail:</p><input type="text" name="email" value="<?php echo $email;?>"><label><?php echo $email_error; ?></label>
<p>Имя:</p><input type="text" name="name"value="<?php echo $name;?>"><label><?php echo $name_error; ?></label>
<p>Фамилия:</p><input type="text" name="lastname" value="<?php echo $lastname;?>"><label><?php echo $lastname_error; ?></label>
<p>Отчество:</p><input type="text" name="father" value="<?php echo $father;?>"><label><?php echo $father_error; ?></label>
<p>Возраст:</p><input type="text" name="age" value="<?php echo $age;?>"><label><?php echo $age_error; ?></label>
<p>Пол:</p><select name="sex">
    <option value="male">Мужской</option>
    <option value="female">Женский</option>
</select>
<p>Комментарии(300 слов):</p><input type="text" name="comment">
<button type = "submit" name="sub" value = "submit"/>submit</button>
<button type = "reset" name="reset" value = "reset"/>reset</button>
</div>
</form>
</body>
</html>