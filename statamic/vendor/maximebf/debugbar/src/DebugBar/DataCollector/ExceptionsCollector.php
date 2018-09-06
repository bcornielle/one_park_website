<?php
/*
 * This file is part of the DebugBar package.
 *
 * (c) 2013 Maxime Bouroumeau-Fuseau
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DebugBar\DataCollector;

use Exception;
use Symfony\Component\Debug\Exception\FatalThrowableError;

/**
 * Collects info about exceptions
 */
class ExceptionsCollector extends DataCollector implements Renderable
{
    protected $exceptions = array();
    protected $chainExceptions = false;

    /**
     * Adds an exception to be profiled in the debug bar
     *
     * @param Exception $e
     * @deprecated in favor on addThrowable
     */
    public function addException(Exception $e)
    {
        $this->addThrowable($e);
    }

    /**
     * Adds a Throwable to be profiled in the debug bar
     *
     * @param \Throwable $e
     */
    public function addThrowable($e)
    {
        $this->exceptions[] = $e;
        if ($this->chainExceptions && $previous = $e->getPrevious()) {
            $this->addThrowable($previous);
        }
    }

    /**
     * Configure whether or not all chained exceptions should be shown.
     *
     * @param bool $chainExceptions
     */
    public function setChainExceptions($chainExceptions = true)
    {
        $this->chainExceptions = $chainExceptions;
    }

    /**
     * Returns the list of exceptions being profiled
     *
     * @return array[\Throwable]
     */
    public function getExceptions()
    {
        return $this->exceptions;
    }

    public function collect()
    {
        return array(
            'count' => count($this->exceptions),
            'exceptions' => array_map(array($this, 'formatThrowableData'), $this->exceptions)
        );
    }

    /**
     * Returns exception data as an array
     *
     * @param Exception $e
     * @return array
     * @deprecated in favor on formatThrowableData
     */
    public function formatExceptionData(Exception $e)
    {
        return $this->formatThrowableData($e);
    }

    /**
     * Returns Throwable data as an array
     *
     * @param \Throwable $e
     * @return array
     */
    public function formatThrowableData($e)
    {
        $filePath = $e->getFile();
        if ($filePath && file_exists($filePath)) {
            $lines = file($filePath);
            $start = $e->getLine() - 4;
            $lines = array_slice($lines, $start < 0 ? 0 : $start, 7);
        } else {
            $lines = array("Cannot open the file ($filePath) in which the exception occurred ");
        }

        return array(
            'type' => get_class($e),
            'message' => $e->getMessage(),
            'code' => $e->getCode(),
            'file' => $filePath,
            'line' => $e->getLine(),
            'surrounding_lines' => $lines
        );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'exceptions';
    }

    /**
     * @return array
     */
    public function getWidgets()
    {
        return array(
            'exceptions' => array(
                'icon' => 'bug',
                'widget' => 'PhpDebugBar.Widgets.ExceptionsWidget',
                'map' => 'exceptions.exceptions',
                'default' => '[]'
            ),
            'exceptions:badge' => array(
                'map' => 'exceptions.count',
                'default' => 'null'
            )
        );
    }
}
