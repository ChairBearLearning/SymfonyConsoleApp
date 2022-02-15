<?php

namespace bin\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Palindrome;

/**
 * 
 */
class PalindromeCommand extends Command {
    protected function configure(): void {
        $this
            ->setName('palindrome')
            ->setDescription('A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.')
            ->addArgument('word', InputArgument::REQUIRED, 'String to by checked')
            ->setHelp("A palindrome is a word, phrase, number, or other sequence of characters which reads the same backward or forward.\nLink : https://en.wikipedia.org/wiki/Palindrome")
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output): int {
        $string = $input->getArgument('word');
        
        $palindrome = new Palindrome();
        
        if( $palindrome->isPalindrome($string) ) {
            $output->writeln('This is a palindrome!');
        } else {
            $output->writeln('This is not palindrome.');
        }
        return Command::SUCCESS;
    }
}