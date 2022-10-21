<?php

namespace Classes\Output;

interface OutputInterface
{
    public function write(array $data): void;
}