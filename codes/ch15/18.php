<?php

function printArray ($var) {
	if(!is_array($var)) {
		
		$var = (array) $var;
		echo "Here are the elements of converted array:<br/>";
		foreach ($var as $key=> $val) {
			echo "$key: $val <br />";
		}
	} else {
    	echo "Here are the elements of array:<br/>";
		foreach ($var as $key=> $val) {
			echo "$key: $val <br />";
		}
	}
}

$a = 'I like mango,  orange and jackfruit';
$b = ['mango', 'orange', 'jackfruit'];

printArray($a);

