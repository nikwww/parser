<?php

namespace Classes\Downloader;

abstract class DownloaderDecorator implements DownloaderInterface
{
    public function __construct(
        protected readonly DownloaderInterface $downloader
    ) {}

    public function download(string $url): string
    {
        return $this->downloader->download($url);
    }
}
