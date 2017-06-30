<?php 
	$arr = array(7,1,2,3,4,5,6,7);
	$new_arr = array_unique($arr);
	asort($new_arr);
	$asort_arr = array_values($new_arr);
	rsort($new_arr);
	$rsort_arr = array_values($new_arr);
	$final_arr = array();

	for($i=0; $i<count($new_arr); $i++){
		$final_arr[] = $rsort_arr[$i];
		$final_arr[] = $asort_arr[$i];
	}
	$res = array_unique($final_arr);
	print_r($res);

