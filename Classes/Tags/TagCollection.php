<?php

namespace Classes\Tags;

class TagCollection implements TagCollectionInterface
{
    /**
     * @var TagAbstract[]
     */
    private array $items = [];

    public function addItem(TagAbstract $item): void
    {
        $this->items[] = $item;
    }

    public function getIterator(): TagIteratorInterface
    {
        return new TagIteratorOrdered($this->items);
    }
}