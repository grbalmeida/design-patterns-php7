<?php

namespace Strategy;

class CompressRar extends CompressionStrategy
{
    public function compress(string $pathFiles): bool
    {
        echo 'Arquivo comprimido no formato ".RAR"';
        return true;
    }
}