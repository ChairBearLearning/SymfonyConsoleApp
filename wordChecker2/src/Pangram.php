<?php

namespace App;


class Pangram
{
    /**
     * A Pangram for a given alphabet is a sentence using every letter of the 
     * alphabet at least once. 
     * 
     * @param string $phrase
     * @return bool
     */
    public function isPangram($phrase)
    {
        $alphabet = range( 'a', 'z' );

        $the_phase = str_split( strtolower( $phrase ) );
        
        return empty( array_diff( $alphabet, $the_phase ) );
    }
}
