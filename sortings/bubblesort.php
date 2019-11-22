<?php 

$arr=array('2','99','3','5','150','4','150');

function bubblesort($array){
    for( $i=0; $i<sizeof($array);  $i++){
        for($j=0; $j<sizeof($array)-$i-1; $j++) {// last i elements are already sorted
            if($array[$j]>$array[$j+1]){
                $temp=$array[$j];
                $array[$j]=$array[$j+1];
                $array[$j+1]=$temp;
            }
        }
    }
    echo "<pre>";
    print_r(($array));
    die;
    return $array;
}


echo "<pre>";
print_r(bubbleSort($arr));
die;


?>