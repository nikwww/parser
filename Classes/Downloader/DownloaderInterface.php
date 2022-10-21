<?php

namespace Classes\Downloader;

interface DownloaderInterface
{
    public function download(string $url): string;
}
