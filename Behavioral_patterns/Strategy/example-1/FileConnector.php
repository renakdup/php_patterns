<?php

class FileConnector implements ConnectorInterface
{
    public string $pathToFile;

    public function __construct(string $pathToFile)
    {
        $this->pathToFile = $pathToFile;
    }

    public function read(): string
    {
        if (! file_exists($this->pathToFile)) {
            throw new Exception("File not found '{$this->pathToFile}'");
        }

        return file_get_contents($this->pathToFile);
    }
}
