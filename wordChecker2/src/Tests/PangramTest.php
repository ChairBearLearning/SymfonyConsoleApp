<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Pangram;

class PangramTest extends TestCase
{
    private $pangram;
    
    public function setUp(): void {
        $this->pangram = new Pangram();
    }

    public function testTrueString() {
        $this->assertTrue($this->pangram->isPangram('The quick brown fox jumps over the lazy dog'));    }

    public function testFalseString() {
        $this->assertFalse($this->pangram->isPangram('meaningless text'));
    }
}
