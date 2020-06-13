<?php

class UrlConnector implements ConnectorInterface
{
    private string $endpoint;

    public function __construct(string $endpoint)
    {
        $this->endpoint = $endpoint;
    }

    public function read(): string
    {
        $responseCode = $this->getHttpResponseCode($this->endpoint);

        if ($responseCode !== '200') {
            throw new \Exception("Content have not got from source '{$this->endpoint}'");
        }
    }

    private function getHttpResponseCode(string $url): ?string
    {
        @$headers = get_headers($url);

        if (! $headers) {
            return null;
        }

        return mb_substr($headers[0], 9, 3, 'UTF-8');
    }
}
