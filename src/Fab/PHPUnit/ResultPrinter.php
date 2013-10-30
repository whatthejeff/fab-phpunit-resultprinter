<?php

/*
 * This file is part of the Fab PHPUnit Result Printer.
 *
 * (c) Jeff Welch <whatthejeff@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Fab\PHPUnit;

/**
 * Make your unit tests fabulous!
 *
 * @author Jeff Welch <whatthejeff@gmail.com>
 */
class ResultPrinter extends \PHPUnit_TextUI_ResultPrinter
{
    /**
     * The Fab to paint the results with.
     *
     * @var Fab\Fab
     */
    private $fab;

    /**
     * {@inheritdoc}
     */
    public function __construct($out = NULL, $verbose = FALSE, $colors = FALSE, $debug = FALSE)
    {
        $term = empty($_SERVER['TERM']) ? 'unknown' : $_SERVER['TERM'];
        $this->fab = \Fab\Factory::getFab($term);

        parent::__construct($out, $verbose, true, $debug);
    }

    /**
     * {@inheritdoc}
     */
    protected function writeProgress($progress)
    {
        if ($progress == '.') {
            $progress = $this->fab->paintChar('*');
        }

        parent::writeProgress($progress);
    }
}