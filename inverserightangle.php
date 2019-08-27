<?php
	
	for($row=1; $row<=5; $row++){
		
		/* for($col=1; $col<=6-$row; $col++){
						echo "*";
		}
		echo "\n"; */
		
		for($col=1; $col<=5; $col++){
						if($col>=6-$row && $col<=5){
							echo "*";
						}else{
							echo " ";
						}
						
		}
		echo "\n";
	}
	
	
	?>