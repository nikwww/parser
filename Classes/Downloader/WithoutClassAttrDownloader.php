<?php

namespace Classes\Downloader;

class WithoutClassAttrDownloader extends DownloaderDecorator
{
    public function download(string $url): string
    {
        $content = parent::download($url);
        return preg_replace(
            [
                '/\sclass=[\'|"][^\'"]+[\'|"]/',
                '/class=[a-zA-Z\d]+/'
            ],
            '',
            $content
        );
    }
}
