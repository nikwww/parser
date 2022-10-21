<?php

namespace Classes\InputParams;

class InputParams implements InputParamsInterface
{
    public function __construct(
        private readonly string $url
    ) {}

    public function getUrl(): string
    {
        return strtolower($this->url);
    }
}