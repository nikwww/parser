<?php

namespace Classes\Tags;

interface TagCollectionInterface
{
    public function addItem(TagAbstract $item): void;
    public function getIterator(): TagIteratorInterface;
}