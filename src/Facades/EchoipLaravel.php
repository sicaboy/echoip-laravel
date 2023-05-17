<?php

namespace Sicaboy\EchoipLaravel\Facades;

use Illuminate\Support\Facades\Facade;
use Sicaboy\EchoipLaravel\DTOs\EchoipResponseDTO;

/**
 * @method static EchoipResponseDTO getInfo(string $ip)
 * @see \Sicaboy\EchoipLaravel\EchoipLaravel
 */
class EchoipLaravel extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sicaboy\EchoipLaravel\EchoipLaravel::class;
    }
}
