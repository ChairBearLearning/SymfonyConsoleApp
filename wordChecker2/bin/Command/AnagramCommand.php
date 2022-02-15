<?php

namespace bin\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use App\Anagram;

#[AsCommand(
    name: 'anagram',
    description: 'An anagram is the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.',
    hidden: false,
    aliases: ['anagram']
)]

class AnagramCommand extends Command {

    protected function configure(): void {
        $this
            // ->setName('anagram')
            // ->setDescription('An anagram is the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.')
            ->addArgument('word', InputArgument::REQUIRED, 'The main word')
            ->addArgument('comparison', InputArgument::REQUIRED, 'The word to compare to the first');
            // ->setHelp("An anagram is the result of rearranging the letters of a word or phrase to produce a new word or phrase, using all the original letters exactly once.\nLink : https://en.wikipedia.org/wiki/Anagram");
    }

    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $word = $input->getArgument('word');
        $comparison = $input->getArgument('comparison');

        $anagram = new Anagram();

        if( $anagram->isAnagram($word, $comparison) ) {
            $output->writeln('This is an anagram!');
        } else {
            $output->writeln('Not an anagram.');
        }
        return Command::SUCCESS;
    }

}