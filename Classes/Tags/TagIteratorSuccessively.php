<?php

namespace Classes\Tags;

use Exceptions\EmptyIteratorException;

class TagIteratorSuccessively implements TagIteratorInterface
{
    private int $position;

    /**
     * @param TagAbstract[] $items
     */
    public function __construct(
        protected array $items,
    ) {
        $this->position = -1;
    }

    /**
     * @throws EmptyIteratorException
     */
    public function next(): TagAbstract
    {
        if (!$this->hasNext()) {
            throw new EmptyIteratorException;
        }

        return $this->items[++$this->position];
    }

    public function hasNext(): bool
    {
        return isset($this->items[$this->position + 1]);
    }
}