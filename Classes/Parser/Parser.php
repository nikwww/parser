<?php

namespace Classes\Parser;

final class Parser implements ParserInterface
{
    /**
     * @return ParsedContentDTO[]
     */
    public function parse(string $content): array
    {
        preg_match_all('%<([a-z]+)[^>]*>%i', $content, $matches);

        $result = [];
        foreach ($matches[1] as $match) {
            $result[] = new ParsedContentDTO($match);
        }
        return $result;
    }
}
