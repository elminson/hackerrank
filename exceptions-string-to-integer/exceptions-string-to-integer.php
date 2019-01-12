<?php

/**
 * Class IntegerClass
 */
class IntegerClass
{
    /**
     * @param int $value
     */
    public static function isInt(int $value)
    {
        echo $value;
    }
}

$handle = fopen("php://stdin", "r");
fscanf($handle, "%s", $var);
try {
    IntegerClass::isInt($var);
} catch (TypeError $exception) {
    echo "Bad String";
}
