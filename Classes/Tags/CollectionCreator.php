<?php

namespace Classes\Tags;

use Classes\Parser\ParsedContentDTO;

class CollectionCreator implements CollectionCreatorInterface
{
    private TagCreator $tagCreator;

    public function __construct()
    {
        $this->tagCreator = new TagCreator;
    }

    /**
     * @param ParsedContentDTO[] $dtos
     */
    public function createCollectionFromDTO(array $dtos): TagCollectionInterface
    {
        $collection = new TagCollection();
        foreach ($dtos as $dto) {
            $tag = ($this->tagCreator)($dto->getTagName());
            $collection->addItem($tag);
        }

        return $collection;
    }
}