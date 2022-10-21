<?php

namespace Classes\InputParams;

class ArgvParser
{
    public function getInputParams(): InputParams
    {
        return new InputParams(
            $this->getUrl(),
        );
    }

    private function getUrl(): string
    {
        return $_SERVER['argv'][1];
    }
}