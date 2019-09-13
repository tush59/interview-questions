<?php $maxarray=array('5','4','3','2','1');
$max=$max2=0;
foreach ($maxarray as $val){
  if($val>$max){
      $max2=$max;
      $max=$val;
    }else if($val>$max2){ 
      $max2=$val;
    }
}

echo 'max is'.$max;
echo '<br/> max2 is'.$max2; ?>