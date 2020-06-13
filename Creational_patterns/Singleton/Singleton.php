<?php

require_once __DIR__ . '../vendor/autoload.php';

class Singleton
{
    public int $data; // for test

    private self $instance;

    private function __construct()
    {
        $this->data = rand(0, 100); // for test
    }

    public function getInstance(): self
    {
        if ($this->instance === null) {
            return $this->instance;
        }

        return new self();
    }

    // При клонировании и при десиреализации может создаться новый экземпляр класса
    private function __clone() {}
    private function __wakeup() {}
}

