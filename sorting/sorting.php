<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
// Write Your Code Here
$numberOfSwaps = 0;
for ($i = 0; $i < count($a); $i++) {
	// Track number of elements swapped during a single array traversal


	for ($j = 0; $j < count($a) - 1; $j++) {
		// Swap adjacent elements if they are in decreasing order
		if ($a[$j] > $a[$j + 1]) {
			$b=$a[$j];
			$c=$a[$j+1];
			$a[$j+1]=$b;
			$a[$j]=$c;
			$numberOfSwaps++;
		}
	}
	// If no elements were swapped during a traversal, array is sorted
	if ($numberOfSwaps == 0) {
		break;
	}
}

echo "Array is sorted in ".$numberOfSwaps." swaps. \n";
echo "First Element: ".$a[0]."\n";
echo "Last Element: ".$a[count($a)-1]."\n";

?>