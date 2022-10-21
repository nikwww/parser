<?php

namespace Classes\Downloader;

class OnlyBodyDownloader extends DownloaderDecorator
{
    public function download(string $url): string
    {
        $content = parent::download($url);

        if (preg_match("/<body.*\/body>/s", $content, $matches)) {
            return $matches[0];
        } else {
            return $content;
        }
    }
}
