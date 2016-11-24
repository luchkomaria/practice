<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>
<?php
if(isset($_POST["submit"])) 
{ 
	$url = $_POST["submit"]; 
	$url = iconv("UTF-8","windows-1251",$url); 
	
	$html = file_get_contents($url); 
	
	if($_POST["selection"] == 1) {
		if(preg_match_all('/\b([A-za-z]\w+)\b/', $html, $matches)){
			echo "blabla";
			}
	}
}
?>
<body>
<div class="container">
<input name="url">
<select name="selection">
<option value="1">Модель</option>
<option value="2"></option>
<option value="3"></option>
<option value="4"></option>
</select>
<button name="submit">Submit</button>
</div>
</body>
</html>