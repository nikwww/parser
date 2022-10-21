<?php

namespace Classes\Tags;

class TagCreator
{
    public function __invoke(string $tag): TagAbstract
    {
        return match ($tag) {
            ScriptTag::NAME => new ScriptTag,
            default => new SomeTag($tag),
        };
    }
}