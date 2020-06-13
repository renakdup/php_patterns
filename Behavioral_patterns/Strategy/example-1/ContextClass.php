<?php

class ContextClass
{
    private ConnectorInterface $strategy;

    public function __construct(ConnectorInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(ConnectorInterface $strategy)
    {
        $this->strategy = $strategy;
    }

    private function read(): string
    {
        try {
            $result = $this->strategy->read();
        } catch (Exception $e) {
            return '';
        }

        return $result;
    }

    public function countNumberSymbols(string $str): int
    {
        return mb_strlen($str, 'UTF-8');
    }

    public function prosess(): string
    {
        $content = $this->read();
        return $this->countNumberSymbols($content);
    }
}
