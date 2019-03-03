<?php

namespace Strategy;

abstract class CompressionStrategy
{
    public function renameFilesInOrder(): void
    {
        echo 'Arquivos renomeados!';
    }

    abstract public function compress(string $pathFiles): bool;
}