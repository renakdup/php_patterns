<?php

interface ConnectorInterface
{
    /**
     * @throws Exception
     */
    public function read(): string;
}
