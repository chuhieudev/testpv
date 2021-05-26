<?php
	$a=array(1, 5, 4, 7, 9, 0, -10, 13, 93, 14, 15);
	$min=abs($a[0]-$a[1]);
	for ($i=0;$i<count($a);$i++){
		for($j=0;$j<count($a);$j++){
			if($i!=$j){
				if(abs($a[$i]-$a[$j])<$min) $min=abs($a[$i]-$a[$j]);
			}
		}
	}
	for ($i=0;$i<count($a);$i++){
		for($j=$i;$j<count($a);$j++){
			if(abs($a[$i]-$a[$j])==$min) 
				echo $a[$i]."va".$a[$j]."<br>";
		}
	}
?>