<?php

namespace Classes;

use Classes\Tags\TagCollectionInterface;

class Calculator
{
    public function calc(TagCollectionInterface $tagCollection): array
    {
        $iterator = $tagCollection->getIterator();
        $result = [];
        while ($iterator->hasNext()) {
            $tag = $iterator->next();
            if (!isset($result[$tag->getName()])) {
                $result[$tag->getName()] = 0;
            }
            $result[$tag->getName()]++;
        }
        return $result;
    }
}