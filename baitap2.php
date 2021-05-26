<?php
	$a=array(0, 100, -4, 8, 143, 5, 99, 100);
	$d=$a[1]+$a[2];
	for($i=0;$i<count($a);$i++){ 
		for($j=0;$j<count($a);$j++){
			if($i!=$j){
				if($a[$i]+$a[$j]>$d) $d=$a[$i]+$a[$j];
			}
		}
	}
	// echo $d;
?>