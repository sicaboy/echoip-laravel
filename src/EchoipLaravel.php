<?php

namespace Sicaboy\EchoipLaravel;

use Sicaboy\EchoipLaravel\Clients\EchoipClient;
use Sicaboy\EchoipLaravel\DTOs\EchoipResponseDTO;

class EchoipLaravel
{
    /**
     * @var EchoipClient
     */
    protected $client;

    public function __construct(EchoipClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $ip
     * @return EchoipResponseDTO
     */
    public function getInfo(string $ip): EchoipResponseDTO
    {
        return $this->client->getInfo($ip);
    }
}
