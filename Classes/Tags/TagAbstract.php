<?php

namespace Classes\Tags;

abstract class TagAbstract
{
    public function __construct(
        protected readonly string $name
    ) {}

    public function getName(): string
    {
        return $this->name;
    }
}