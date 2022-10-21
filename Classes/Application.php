<?php

namespace Classes;

use Classes\Downloader\ConsoleDownloader;
use Classes\Downloader\DownloaderInterface;
use Classes\InputParams\InputParams;
use Classes\Parser\ParserManager;
use Classes\Tags\CollectionCreator;
use Classes\Tags\TagCreator;
use Classes\Tags\CollectionCreatorInterface;
use Classes\Output\OutputInterface;

class Application
{
    private DownloaderInterface $downloader;
    private CollectionCreatorInterface $collectionCreator;

    public function __construct(
        public InputParams $inputParams,
        DownloaderInterface $downloader = null,
    ) {
        $this->downloader = $downloader ?? new ConsoleDownloader;
        $this->collectionCreator = new CollectionCreator;
    }

    public function setTagCreator(CollectionCreatorInterface $tagCreator): void
    {
        $this->collectionCreator = $tagCreator;
    }

    public function run(OutputInterface $output): void
    {
        $content = $this->downloader->download($this->inputParams->getUrl());
        $tagDTOs = ParserManager::getInstance()->getParser()->parse($content);
        $tagCollection = $this->collectionCreator->createCollectionFromDTO($tagDTOs);

        $calculator = new Calculator; // без интерфейса жестко приколочено
        $result = $calculator->calc($tagCollection);

        $output->write($result);
    }
}