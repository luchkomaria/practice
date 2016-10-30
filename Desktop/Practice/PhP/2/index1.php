<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
if (isset($_POST['submit'])){
	$username = $_POST['name'];
	$userpass = $_POST['password'];
	$lines = file("logins.txt");
	foreach($lines as $line){
		$user = explode("|", $line);
		echo $user[0];
		echo $username;
		if($user[0] == $username){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=index2.html\">";
		}
		else{
			$wrong ="Неправильно введен логин/пароль. Повторите ввод.";
		}
	}
}
?>
<form method="post">
<div id="container">
	<div id="left">
    	<div id="top_left"><img src="login.png"></div>
        <div id="bottom_left"><p>Добро пожаловать!</p>
        <p>Введите правильные имя пользователя и пароль для входа на сайт!</p>
        <p><a href="index2.php">Регистация</a></p>
        </div>
    </div>
    <div id="right">
    	<div id="top_right"><h1>Вход</h1></div>
        <div id="bottom_right">
        <p>Имя пользователя</p>
        <input type="text" name="name">
        <p>Пароль</p>
        <input type="password" name="password">
        <p><input type="submit" name="submit" value="Login"></p>
        <label><?php echo $wrong;?></label>
        </div>
    </div>
</div>
</form>
</body>
</html>

