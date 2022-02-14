<?php

namespace bin;

$container = require __DIR__ . '/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$console = new Application('Symfony Console Application', '0.1.0');

$console->addCommands(array(
    new \bin\Command\AnagramCommand(),
    new \bin\Command\PalindromeCommand(),
    new \bin\Command\PangramCommand(),
));

$console->run();