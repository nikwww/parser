<?php

namespace Classes\Parser;

class ParsedContentDTO
{
    public function __construct(
        private readonly string $tagName,
    ) {}

    public function getTagName(): string
    {
        return $this->tagName;
    }
}
