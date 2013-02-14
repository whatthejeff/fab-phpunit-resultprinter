<?php

/*
 * This file is part of the Fab PHPUnit Result Printer.
 *
 * (c) Jeff Welch <whatthejeff@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fab\PHPUnit\Tests;

/**
 * The Fab PHPUnit Result Printer test cases.
 *
 * @covers Fab\PHPunit\ResultPrinter
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class ResultPrinterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider termProvider
     */
    public function testWriteProgressUsesFabulousDots($term, $expected)
    {
        $_SERVER['TERM'] = $term;
        $actual = '';
        $i = 100;

        $mock = $this->getMockBuilder('Fab\\PHPUnit\\ResultPrinter')
                     ->setMethods(array('write'))
                     ->getMock();
        $test = $this->getMock('PHPUnit_Framework_TestCase');

        $mock->expects($this->any())
             ->method('write')
             ->will($this->returnCallback(function ($buffer) use (&$actual){
                 $actual .= $buffer;
             }));

        while ($i--) {
            $mock->endTest($test, 0);
        }

        $this->assertEquals($expected, $actual);
    }

    public function termProvider()
    {
        $expected_superfab = "\x1b[38;5;154m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;148m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;199m*\x1b[0m\x1b[38;5;199m*\x1b[0m\x1b[38;5;164m*\x1b[0m\x1b[38;5;164m*\x1b[0m\x1b[38;5;129m*\x1b[0m\x1b[38;5;129m*\x1b[0m\x1b[38;5;93m*\x1b[0m\x1b[38;5;93m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;33m*\x1b[0m\x1b[38;5;33m*\x1b[0m\x1b[38;5;39m*\x1b[0m\x1b[38;5;39m*\x1b[0m\x1b[38;5;44m*\x1b[0m\x1b[38;5;44m*\x1b[0m\x1b[38;5;49m*\x1b[0m\x1b[38;5;49m*\x1b[0m\x1b[38;5;48m*\x1b[0m\x1b[38;5;48m*\x1b[0m\x1b[38;5;83m*\x1b[0m\x1b[38;5;83m*\x1b[0m\x1b[38;5;118m*\x1b[0m\x1b[38;5;118m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;178m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;148m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;199m*\x1b[0m\x1b[38;5;199m*\x1b[0m\x1b[38;5;164m*\x1b[0m\x1b[38;5;164m*\x1b[0m\x1b[38;5;129m*\x1b[0m\x1b[38;5;129m*\x1b[0m\x1b[38;5;93m*\x1b[0m\x1b[38;5;93m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;63m*\x1b[0m\x1b[38;5;33m*\x1b[0m\x1b[38;5;33m*\x1b[0m\x1b[38;5;39m*\x1b[0m\x1b[38;5;39m*\x1b[0m\x1b[38;5;44m*\x1b[0m\x1b[38;5;44m*\x1b[0m\x1b[38;5;49m*\x1b[0m\x1b[38;5;49m*\x1b[0m\x1b[38;5;48m*\x1b[0m\x1b[38;5;48m*\x1b[0m\x1b[38;5;83m*\x1b[0m\x1b[38;5;83m*\x1b[0m\x1b[38;5;118m*\x1b[0m\x1b[38;5;118m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;178m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;154m*\x1b[0m\x1b[38;5;148m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;184m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;214m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;208m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;203m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;198m*\x1b[0m\x1b[38;5;199m*\x1b[0m";
        $expected_fab = "\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m\x1b[35m*\x1b[0m\x1b[36m*\x1b[0m\x1b[31m*\x1b[0m\x1b[32m*\x1b[0m\x1b[33m*\x1b[0m\x1b[34m*\x1b[0m";

        return array(
            array('xterm', $expected_superfab),
            array('rxvt-unicode-256color', $expected_superfab),
            array('linux', $expected_fab),
            array('', $expected_fab),
            array(null, $expected_fab)
        );
    }
}