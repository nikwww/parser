<?php

namespace Classes\Parser;

interface ParserInterface
{
    /**
     * @return ParsedContentDTO[]
     */
    public function parse(string $content): array;
}
