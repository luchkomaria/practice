<?php 
$fst = $_POST['fst'];
$nd = $_POST['nd'];
$action =  $_POST['action'];
if(!is_numeric($fst)||!is_numeric($nd)){
	echo "errorn";}
else{	
switch ($action) {
    case "plus":
		$result = $fst+$nd;
        echo $result;
        break;
    case "minus":
        $result = $fst-$nd;
		echo $result;
        break;
    case "multiply":
        $result = $fst*$nd;
		echo $result;
        break;
    case "divide":
	if($nd==0) 
	{echo "error0";}
	else {$result = $fst/$nd;}
		echo $result;
        break;
    case "exponentiation":
        $result = pow($fst,$nd);
		echo $result;
        break;
	case "remain":
        $result = $fst % $nd;
		echo $result;
        break;
}
}
?>
