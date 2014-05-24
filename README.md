The Fab PHPUnit Result Printer
==============================

Make your unit tests [fabulous](https://github.com/whatthejeff/fab)!

## Usage

[![fabulous unit tests](https://github.com/whatthejeff/fab-phpunit-resultprinter/raw/master/fab.png)](https://github.com/whatthejeff/fab-phpunit-resultprinter/raw/master/fab.png)

## Requirements

The Fab PHPUnit Result Printer requires:

 * PHP 5.3.3 or later.
 * A terminal emulator with support for ANSI escape sequences.

**NOTE:** By default, the Windows console does not support ANSI escape
sequences. If you'd like to use the Fab PHPUnit Result Printer on Windows, you
may want to try one of the following solutions:

 * [ANSICON](https://github.com/adoxa/ansicon)
 * [ConEmu](https://github.com/Maximus5/ConEmu)

## Installation

The recommended way to install the Fab PHPUnit Result Printer is [through
composer](http://getcomposer.org). Just create a `composer.json` file and
run the `php composer.phar install` command to install it:

~~~json
{
    "require-dev": {
        "whatthejeff/fab-phpunit-resultprinter": "~1.1"
    }
}
~~~

Once installed, add the following attributes to the `<phpunit>` element in your
`phpunit.xml` file:

    printerFile="vendor/whatthejeff/fab-phpunit-resultprinter/src/Fab/PHPUnit/ResultPrinter.php"
    printerClass="Fab\PHPUnit\ResultPrinter"

**NOTE:** If PHPUnit was not installed via composer, you also need to include
the composer autoloader. One easy way to do this is to add the following
attribute to the `<phpunit>` element in your `phpunit.xml` file:

    bootstrap="vendor/autoload.php"

## Tests

[![Build Status](https://secure.travis-ci.org/whatthejeff/fab-phpunit-resultprinter.png?branch=master)](https://travis-ci.org/whatthejeff/fab-phpunit-resultprinter)

To run the test suite, you need [composer](http://getcomposer.org).

    $ php composer.phar install
    $ vendor/bin/phpunit

## Acknowledgements

The Fab PHPUnit Result Printer was __heavily__ inspired by the glorious [minitest/pride](https://github.com/seattlerb/minitest/blob/master/lib/minitest/pride.rb).

## License

Fab is licensed under the [MIT license](LICENSE).