<?php
class Solution
{
    private $pushCharacter;
    private $array,$queue = [];

    public function pushCharacter($char)
    {
        $this->array[] = $char;
    }

    public function enqueueCharacter($char)
    {
        $this->queue[] = $char;
    }

    public function popCharacter()
    {
        return strrev(implode($this->array));
    }

    public function dequeueCharacter()
    {
        return implode($this->queue);
    }
}


// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; ++$i) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; ++$i) {
    if ($obj->popCharacter() != $obj->dequeueCharacter()) {
        $isPalindrome = false;

        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome) {
    echo 'The word, '.$s.', is a palindrome.';
} else {
    echo 'The word, '.$s.', is not a palindrome.';
}

?>