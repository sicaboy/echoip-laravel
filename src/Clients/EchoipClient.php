<?php

namespace Sicaboy\EchoipLaravel\Clients;

use Sicaboy\EchoipLaravel\DTOs\EchoipResponseDTO;

class EchoipClient
{
    /**
     * @param string $ip
     * @return EchoipResponseDTO
     */
    public function getInfo(string $ip): EchoipResponseDTO
    {
        $url = config('echoip.api_url') . '/json?ip=' . $ip;
        $result = $this->requestJson($url);
        return (new EchoipResponseDTO())
            ->setIp($result['ip'])
            ->setIpDecimal($result['ip_decimal'] ?? null)
            ->setCountry($result['country'] ?? null)
            ->setCountryIso($result['country_iso'] ?? null)
            ->setCountryEu($result['country_eu'] ?? null)
            ->setRegionName($result['region_name'] ?? null)
            ->setRegionCode($result['region_code'] ?? null)
            ->setZipCode($result['zip_code'] ?? null)
            ->setCity($result['city'] ?? null)
            ->setLatitude($result['latitude'] ?? null)
            ->setLongitude($result['longitude'] ?? null)
            ->setTimeZone($result['time_zone'] ?? null)
            ->setAsn($result['asn'] ?? null)
            ->setAsnOrg($result['asn_org'] ?? null)
            ->setHostname($result['hostname'] ?? null)
            ->setUserAgent((array)$result['user_agent']);
    }

    /**
     * @param string $url
     * @return array
     */
    protected function requestJson(string $url): array
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);
        return json_decode($output, true);
    }
}
