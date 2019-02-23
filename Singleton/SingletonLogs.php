<?php

namespace Singleton;

class SingletonLogs
{
    protected static $instance;

    private function __construct() { }
    private function __clone() { }
    private function __wakeup() { }

    public function recordLogs(array $data): void
    {
        $filename = 'logs.txt';
        $previousLogs = [];

        if (filesize($filename) > 0) {
            $fileContent = file_get_contents($filename);
            $previousLogs = json_decode($filename, true);
        }

        $previousLogs[] = $data;
        $file = fopen($filename, 'w');
        fwrite($file, json_encode($previousLogs));
        fclose($file);
    }

    public static function getInstance(): self
    {
        if (empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}