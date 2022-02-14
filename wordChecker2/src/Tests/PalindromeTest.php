<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Palindrome;

class PalindromeTest extends TestCase
{
    private $palindrome;
    
    public function setUp(): void {
        $this->palindrome = new Palindrome();
    }

    public function testTrueString() {
        $this->assertTrue($this->palindrome->isPalindrome('racecar'));    }

    public function testFalseString() {
        $this->assertFalse($this->palindrome->isPalindrome('meaningless text'));
    }
}
