<?php
class IntegerClass {
    public static function isInt(int $value) {
        echo $value;
    }
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$S);
try{
    IntegerClass::isInt($S);
} catch (TypeError $e) {
    echo "Bad String";
}
