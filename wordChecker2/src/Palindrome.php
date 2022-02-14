<?php

namespace App;


class Palindrome
{
    /**
     * A palindrome is a word, phrase, number, or other sequence of characters 
     * which reads the same backward or forward.
     *
     * @param string $word
     * @return bool
     */
    public function isPalindrome($word)
    {
        $sanitizedString = \str_replace(' ', '', $word);
        return $sanitizedString == strrev($sanitizedString);
    }
}
