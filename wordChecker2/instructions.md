More indepth user guide available included in the project files.

Basic Guide:

Installation
Step 1:
- CD into the folder you'd like to download the project into
- Run git clone in this directory

Step 2:
- CD into the project folder
- Run composer install to install all dependencies needed for the project.

Running the application

To run tests:
Tests are run using PHPUnit, which means you can use the following terminal commands.
- php ./vendor/bin/phpunit src/Tests --to run all test files
- php ./vendor/bin/phpunit src/Tests/[name] --to run an individual test file such as php ./vendor/bin/phpunit src/Tests/AnagramTest.php

To run console applications:
Console applications can be run with the following terminal commands.
-  php bin/console.php [name] <arguments> --to run the specific console app
- -  php bin/console.php [name] --help --to get information about the console app


Thank you for your time