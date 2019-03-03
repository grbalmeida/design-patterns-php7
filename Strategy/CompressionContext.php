<?php

namespace Strategy;

class CompressionContext
{
    private $compressionStrategy;

    public function __construct(CompressionStrategy $compressionStrategy)
    {
        $this->compressionStrategy = $compressionStrategy;
    }

    public function setCompressionStrategy(CompressionStrategy $compressionStrategy): void
    {
        $this->compressionStrategy = $compressionStrategy;
    }

    public function compress(string $filePath): void
    {
        $this->compressionStrategy->compress($filePath);
    }
}