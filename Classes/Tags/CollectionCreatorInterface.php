<?php

namespace Classes\Tags;

interface CollectionCreatorInterface
{
    /**
     * @param ParsedContentDTO[] $dtos
     */
    public function createCollectionFromDTO(array $dtos): TagCollectionInterface;
}