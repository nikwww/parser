<?php

namespace Classes\Parser;

use Exceptions\SingletonWakeupException;

class ParserManager
{
    private static self $instance;
    private ParserInterface $parser;

    protected function __construct() { }

    protected function __clone() { }

    /**
     * @throws SingletonWakeupException
     */
    public function __wakeup()
    {
        throw new SingletonWakeupException;
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function getParser(): ParserInterface
    {
        if (!isset($this->parser)) {
            $this->parser = new Parser;
        }

        return $this->parser;
    }
}