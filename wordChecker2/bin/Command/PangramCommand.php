<?php

namespace bin\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Pangram;

/**
 * 
 */
class PangramCommand extends Command {
    protected function configure() {
        $this
            ->setName('pangram')
            ->setDescription('A Pangram for a given alphabet is a sentence using every letter of the alphabet at least once. ')
            ->addArgument('phrase', InputArgument::REQUIRED, 'String to by checked')
            ->setHelp("A Pangram for a given alphabet is a sentence using every letter of the alphabet at least once. \nLink : https://en.wikipedia.org/wiki/Pangram")
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $string = $input->getArgument('phrase');
        
        $palindrome = new Pangram();
        
        if( $palindrome->isPangram($string) ) {
            $output->writeln('This is a pangram!');
        } else {
            $output->writeln('This is not pangram.');
        }
    }
}