<?php

namespace Classes\Downloader;

class ConsoleDownloader implements DownloaderInterface
{
    private DownloaderInterface $downloader;

    public function __construct()
    {
        $simpleDownloader = new Downloader;
        $bodyDownloader = new OnlyBodyDownloader($simpleDownloader);
        $lowerDownloader = new LowercaseDownloader($bodyDownloader);
        $this->downloader = new WithoutClassAttrDownloader($lowerDownloader);
    }

    public function download(string $url): string
    {
        return $this->downloader->download($url);
    }
}