<?php

namespace Classes\Downloader;

class LowercaseDownloader extends DownloaderDecorator
{
    public function download(string $url): string
    {
        $content = parent::download($url);
        return strtolower($content);
    }
}
