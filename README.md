The Fab PHPUnit Result Printer
==============================

Make your unit tests [fabulous](https://github.com/whatthejeff/fab)!

## Usage

[![fabulous unit tests](https://github.com/whatthejeff/fab-phpunit-resultprinter/raw/master/fab.png)](https://github.com/whatthejeff/fab-phpunit-resultprinter/raw/master/fab.png)

## Requirements

The Fab PHPUnit Result Printer works with PHP 5.3.3 or later.

## Installation

The recommended way to install the Fab PHPUnit Result Printer is [through
composer](http://getcomposer.org). Just create a `composer.json` file and
run the `php composer.phar install --dev` command to install it:

    {
        "require-dev": {
            "whatthejeff/fab-phpunit-resultprinter": "1.0.*@dev"
        }
    }

Once installed, add the following attributes to the `<phpunit>` element in your
`phpunit.xml` file:

    printerFile="vendor/whatthejeff/fab-phpunit-resultprinter/src/Fab/PHPUnit/ResultPrinter.php"
    printerClass="Fab\PHPunit\ResultPrinter"

## Tests

[![Build Status](https://secure.travis-ci.org/whatthejeff/fab-phpunit-resultprinter.png?branch=master)](https://travis-ci.org/whatthejeff/fab-phpunit-resultprinter)

To run the test suite, you need [composer](http://getcomposer.org).

    $ php composer.phar install --dev
    $ vendor/bin/phpunit

## Acknowledgements

The Fab PHPUnit Result Printer was __heavily__ inspired by the glorious [minitest/pride](https://github.com/seattlerb/minitest/blob/master/lib/minitest/pride.rb).

## License

Fab is licensed under the [MIT license](LICENSE).