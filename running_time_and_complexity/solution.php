<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$T=intval(fgets(STDIN));
while($T-->0){
	$number=intval(fgets(STDIN));
    if(isPrime($number)){
        echo "Prime\n";
    } else{
        echo "Not prime \n";
    }
}



function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1 )
        return false;

    //2 is prime (the only even number that is prime)
    if($num == 2 || $num == 3)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0 || $num % 3 == 0 ) {
        return false;
    }
    

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    $ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }
    
    
     $i = 5;
     $w = 2;
    while ($i * $i < $num) {
        if ($num % $i ==0) {
            return false;
        } 
        $i+=$w;
        $w=6-$w;
    }
    
   
    return true;
}

?>