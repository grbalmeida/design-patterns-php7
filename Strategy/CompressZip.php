<?php

namespace Strategy;

class CompressZip extends CompressionStrategy
{
    public function compress(string $pathFiles): bool
    {
        echo 'Arquivo comprimido no formato ".ZIP"';
        return true;   
    }
}