<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Anagram;

class AnagramTest extends TestCase
{

    private $anagram;

    public function setUp(): void {
        $this->anagram = new Anagram();
    }

    public function testTrueString() {
        $this->assertTrue($this->anagram->isAnagram('I am Lord Voldemort', 'Tom Marvolo Riddle'));
    }

    public function testFalseString() {
        $this->assertFalse($this->anagram->isAnagram('anagram', 'palindrome'));
    }
}
