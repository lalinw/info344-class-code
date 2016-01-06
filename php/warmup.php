<?php

//Prompt 1
$int = rand(1,100); 
echo "your new random value is $int\n";

//Prompt 2
$monthArray = array();
for($m = 1;$m <= 12; $m++){ 
    $month =  date("F", mktime(0, 0, 0, $m, 1)); 
    echo "$month\n"; 
    array_push($monthArray, $month);
} 
echo "----\n";
sort($monthArray);
for($m = 0;$m <= 11; $m++){ 
	echo "$monthArray[$m]\n";
} 

?>