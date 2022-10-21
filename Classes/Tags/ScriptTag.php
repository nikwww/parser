<?php

namespace Classes\Tags;

class ScriptTag extends TagAbstract
{
    public const NAME = 'script';

    public function __construct(string $name = self::NAME)
    {
        if ($name !== self::NAME) {
            $name = self::NAME;
        }

        parent::__construct($name);
    }
}