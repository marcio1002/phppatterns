<?php

namespace DesignPatterns\Behavioral\Strategy;

use DesignPatterns\Behavioral\Strategy\Contracts\Compression;

class CompressionContext
{
    private Compression $compression;

    public function __construct(Compression $compression)
    {
        $this->compression = $compression;
    }

    public function setCompression(Compression $compression): void
    {
        $this->compression = $compression;
    }

    public function compress(string $destination): void
    {
        $this->compression->compress($destination);
    }

    public function orderFile(): void
    {
        $this->compression->renameFilesSort();
    }
}
