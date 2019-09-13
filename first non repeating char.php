<?php 
$count=0;
$str='Hello World!';
$arr=str_split($str);
$charsearch=$arr[0];
echo check_char($arr,$charsearch,0);

function check_char($arr,$character,$position)
{
  //echo "charis".$character;
  foreach($arr as $char){
  
      if($character==$char){
         return check_char($arr,$arr[$position+1],$position+1);
      }
      return $character;
    }
}
 ?>