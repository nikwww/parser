<?php

namespace Classes\Tags;

use Exceptions\EmptyIteratorException;

class TagIteratorOrdered extends TagIteratorSuccessively
{
    /**
     * @param TagAbstract[] $items
     */
    public function __construct($items) {
        parent::__construct($items);

        $this->sort();
    }

    private function sort(): void
    {
        usort(
            $this->items,
            fn(TagAbstract $a, TagAbstract $b) => strcmp($a->getName(), $b->getName())
        );
    }
}