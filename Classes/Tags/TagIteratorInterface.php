<?php

namespace Classes\Tags;

interface TagIteratorInterface
{
    public function next(): TagAbstract;
    public function hasNext(): bool;
}