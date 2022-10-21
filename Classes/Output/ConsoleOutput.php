<?php

namespace Classes\Output;

class ConsoleOutput implements OutputInterface
{
    private const PATTERN = "<%s> %d\n";

    public function write(array $data): void
    {
        foreach ($data as $tag => $cnt) {
            printf(self::PATTERN, $tag, $cnt);
        }
    }
}