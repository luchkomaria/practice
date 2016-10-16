<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Форма Авторизации</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php 
		$username = "maria";
		$userpassword = "luchko";
		$user = 0;
		if (isset($_POST['name']) && $_POST['name'] == $username){
				++$user;}
		if (isset($_POST['password']) && $_POST['password'] == $userpassword){
				++$user;
		}
		if ($user == 2){
			echo "<meta http-equiv=\"refresh\" content=\"0;URL=index2.html\">";}
		else {$wrong = '<h2>Неверная пара логин/пароль.</h2>';}
		?>
<form action="index1.php" method="post">
<div id="container">
	<div id="left">
    	<div id="top_left"><img src="login.png"></div>
        <div id="bottom_left"><p>Добро пожаловать!</p>
        <p>Введите правильные имя пользователя и пароль для входа на сайт!
        <p><a href="#">Регистация</a></p>
        </div>
    </div>
    <div id="right">
    	<div id="top_right"><h1>Вход</h1></div>
        <div id="bottom_right">
        <p>Имя пользователя</p>
        <input type="text" name="name">
        <p>Пароль</p>
        <input type="password" name="password">
        <p><input type="submit" name="login" value="Login"></p>
        <?php echo $wrong; ?>
        </div>
    </div>
</div>
</form>
</body>
</html>
