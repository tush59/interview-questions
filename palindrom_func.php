<?php 
$mainNumber=1211;

$temp=$mainNumber;

$arr=str_split($temp);

$reverse=array_reverse($arr);

$reverse=implode("",$reverse);

if($reverse==$mainNumber){
	echo "palindrom";
}else{
	echo "not";
}



?>