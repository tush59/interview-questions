<?php
	error_reporting(E_ALL^E_NOTICE);
	ini_set('display_errors','On');

	$num=121;
	$copynum=$num;
	$digit;
	$reverse;

while ($copynum>0){
   $digit=$copynum%10;
  $reverse=($reverse*10+$digit);
  //echo $reverse;
  $copynum=$copynum/10;
}
echo "<br/>";
echo $reverse;
echo "<br/>";
if($num==$reverse){
 echo "palindrom"; 
}else{
	echo "not";
}











?>