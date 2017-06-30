<?php
/*
 * Complete the function below.
 */
function amount_value($input1)
{
    //Write code here
    echo "<pre>"; 
    // print_r($input1);
    foreach ($input1 as $key => $value) {
    	$input1[$key] = explode('#', $value);
    }

   // print_r($input1); 
    $adjacents = [[1,-1],[0,1],[1,0],[1,1]];
    $sets = [];
    foreach ($input1 as $key1 => $sub_arr) {
    	foreach ($sub_arr as $key2 => $value) {
    		// adding 
    			$all_values = array();
    			$output_key = ($key1+1). "#" . ($key2+1);
    			$main_key = $key1. "#" . $key2;
    			//echo "<br><br><b>adjacents of  $key1 - $key2   ::: $main_key </b>";
    			//$sets[$main_key] = [];
				if(isset($input1[$key1][$key2])){
    				$all_values[$main_key] = $input1[$key1][$key2];
				}
    			foreach ($adjacents as $levels) {
    				$plus_adj_key1 = $key1+$levels[0];
    				$plus_adj_key2 = $key2+$levels[1];
    				//$key1+{$levels[0]}  -  $key2+ {$levels[1]} :: 
    				//echo "<br>".  $plus_adj_key1 . "-" . $plus_adj_key2;
    				
    				$plus_key = $plus_adj_key1. "#" . $plus_adj_key2;
    				if(isset($input1[$plus_adj_key1][$plus_adj_key2])){
	    				$all_values[$plus_key] = $input1[$plus_adj_key1][$plus_adj_key2];
    				}


    				$sub_adj_key1 = ($key1-$levels[0] < 0) ? 0 : $key1-$levels[0];
    				$sub_adj_key2 = ($key2-$levels[1] < 0) ? 0 : $key2-$levels[1];
    				
    				//echo "<br>".  $sub_adj_key1 . "-" . $sub_adj_key2;
    				$sub_key = $sub_adj_key1. "#" . $sub_adj_key2;
    				if(isset($input1[$sub_adj_key1][$sub_adj_key2])) {
    					$all_values[$sub_key] = $input1[$sub_adj_key1][$sub_adj_key2];
    				}


    			}
    			asort($all_values);
    			
    			/*echo $reset_value = reset($all_values);
				echo $reset_key = key($all_values);
				$sets[$output_key][$reset_key] = $reset_value;
    			echo $end_value = end($all_values); // move the internal pointer to the end of the array
				echo $end_key = key($all_values);
				$sets[$output_key][$end_key] = $end_value;*/
				$sets[$output_key]  = reset($all_values);

    			
    	}
    }
    /*echo "<br>";
    print_r($sets);
    asort($sets);
    print_r($sets);
    */$keys = array_keys($sets, max($sets));
   
    print_r($keys);
    exit;
    //return array();

}


/*$__fp = fopen("php://stdin", "r");
$ip1_cnt = 0;
fscanf($__fp, "%d", $ip1_cnt);
$ip1 = array();
for ($ip1_i=0; $ip1_i < $ip1_cnt; $ip1_i++) { 
    $ip1_item = fgets($__fp);
    $ip1_item = trim($ip1_item);
    $ip1[] = $ip1_item;
}*/

$ip1 = array('12#45#33', '94#54#23', '98#59#27');

$output = amount_value($ip1);

foreach ($output as $output_cur) {
print( $output_cur ."\n");
}
