<?php
#Binary Numbers

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);
$new=(string) base_convert($n, 10, 2);
$number=0;
$cant=strlen($new);
echo getBinary($new,"1");


function getBinary($str,$c) {
	$len = strlen($str);
	$maximum=0;
	$count=0;
	for($i=0;$i<$len;$i++){
		if(substr($str,$i,1)==$c){
			$count++;
			if($count>$maximum) $maximum=$count;
		}else $count=0;
	}
	return $maximum;
}

fclose($stdin);
