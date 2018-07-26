<?php
/**
 * Created by edeoleo@gmail.com.
 * User: Elminson De Oleo Baez
 * Desc: ...
 * Date: 7/25/2018
 * Time: 10:06 PM
 */

namespace Elminson\Longest;

require_once __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;


class LongestStringTest extends TestCase
{
    public function testMultipleReturn()
    {
        $this->assertEquals((new LongestString())->longest("abcabcbb"), 3);
        $this->assertEquals((new LongestString())->longest("bbbbb"), 1);
        $this->assertEquals((new LongestString())->longest("pwwkew"), 3);
    }
}
