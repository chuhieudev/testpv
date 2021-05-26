
<?php
	$a=array(1,2,3,4,5,6,7,8,9);
	$b=array_chunk($a, 3);
	for ($i=0;$i<3;$i++){
		for($j=0;$j<3;$j++){
			$x[]=$b[$j][$i];	
		}
	}
	// print_r($x);
 ?>
