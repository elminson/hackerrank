<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
fscanf($_fp,"%d",$number);

for($i=0;$i<$number;$i++){
	fscanf($_fp,"%s",$string);
	$array=str_split($string);
	$dataeven=[];
	$dataodd=[];
	foreach($array as $key => $value){
		if($key%2==0){
			$dataeven[] = $value;
		} else {
			$dataodd[]=$value;    
		}
	}
	echo implode($dataeven)." ".implode($dataodd)."\n";
}

?>