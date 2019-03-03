<?php

namespace Strategy;

class CompressTar extends CompressionStrategy
{
    public function compress(string $pathFiles): bool
    {
        echo 'Arquivo comprimido no formato ".TAR"';
        return true;
    }
}