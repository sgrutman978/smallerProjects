<?php
$spaces = [" "," "," "," "," "," "," "," "," "];
$combos = [0,1,2,3,4,5,6,7,8,0,3,6,1,4,7,2,5,8,0,4,8,2,4,6];
$c7 = 0;
$c8 = 0;
for($c0 = 0; $c0 < 9;$c0++){
	$spaces[$c0] = "X";
	for($c1 = $c0; $c1 < 9;$c1++){
if($c1 != $c0){
$spaces[$c1] = "X";
		for($c2 = $c1; $c2 < 9;$c2++){
			if($c2 != $c1 && $c2 != $c0){
				$c8++;
	$c5 = 0;
		$spaces[$c2] = "X";
		for($c3 = 0; $c3 < 24; $c3 = $c3 + 3){
			$c4 = 0;
		if($spaces[$combos[$c3]] == "X"){
$c4++;
		}
		if($spaces[$combos[$c3+1]] == "X"){
$c4++;
		}
		if($spaces[$combos[$c3+2]] == "X"){
$c4++;
		}
		if($c4 == 2){
$c5++;
		}
	}
	if($c5 >= 2){
for($c9 = 0; $c9 < 9;$c9++){
	if($spaces[$c9] == "X"){
		echo $c9;
	}
}
echo "</br>"; 
	$c7++;
	}
	$spaces[$c2] = " ";
	}
			}
$spaces[$c1] = " ";
}
	}
	$spaces[$c0] = " ";
}
echo "(Possible board variations with 3 Xs)/(Double trap boards) ".$c7."</br>".$c8;
?>