<?php 
	$row=9; $col=5;
	$k=3;
	for($i=1; $i<=$row;$i++){
			for ($j=1; $j<=$col; $j++){
			
					if($i<=3 && $j==3){
						echo "*";
					}else if($i<=3){
							echo " ";
					}
					
					if($i==4 && $j>=2 && $j <=3){
						echo "*";
					}else if($i==4){
						echo " ";
					}
					
					if($i>=5 && $i<=9){
						if($j<=$k){
							echo "*";
						}else{
							echo " ";
						}
					}
			}
			$k++;
			echo "\n";
	}
	
	
	/****
	output
	  *
	  *
	  *
	 **
	*****
	*****
	*****
	*****
	*****

	
	****/
	
	
	
	?>