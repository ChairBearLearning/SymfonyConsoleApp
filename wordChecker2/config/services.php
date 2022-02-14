
<?php
use Zend\ServiceManager\ServiceManager;
use App\Command\AnagramCommand;

return [
    'factories' => [
        MyCommand::class => function (ServiceManager $serviceManager) {
            return new AnagramCommand();
        },
    ],
];