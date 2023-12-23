<?php

namespace Sicaboy\EchoipLaravel\DTOs;

class EchoipResponseDTO
{
    private string $ip;
    private $ip_decimal;
    private ?string $country;
    private ?string $country_iso;
    private ?bool $country_eu;
    private ?string $region_name;
    private ?string $region_code;
    private ?string $zip_code;
    private ?string $city;
    private ?float $latitude;
    private ?float $longitude;
    private ?string $time_zone;
    private ?string $asn;
    private ?string $asn_org;
    private ?string $hostname;
    private ?array $user_agent;

    /**
     * @return string
     */
    public function getIp(): string
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return $this
     */
    public function setIp(string $ip): self
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return int|float|null
     */
    public function getIpDecimal()
    {
        return $this->ip_decimal;
    }

    /**
     * @param int|float|null $ip_decimal
     * @return $this
     */
    public function setIpDecimal($ip_decimal): self
    {
        $this->ip_decimal = $ip_decimal;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     * @return $this
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountryIso(): ?string
    {
        return $this->country_iso;
    }

    /**
     * @param string|null $country_iso
     * @return $this
     */
    public function setCountryIso(?string $country_iso): self
    {
        $this->country_iso = $country_iso;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCountryEu(): ?bool
    {
        return $this->country_eu;
    }

    /**
     * @param bool|null $country_eu
     * @return $this
     */
    public function setCountryEu(?bool $country_eu): self
    {
        $this->country_eu = $country_eu;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegionName(): ?string
    {
        return $this->region_name;
    }

    /**
     * @param string|null $region_name
     * @return $this
     */
    public function setRegionName(?string $region_name): self
    {
        $this->region_name = $region_name;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getRegionCode(): ?string
    {
        return $this->region_code;
    }

    /**
     * @param string|null $region_code
     * @return $this
     */
    public function setRegionCode(?string $region_code): self
    {
        $this->region_code = $region_code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    /**
     * @param string|null $zip_code
     * @return $this
     */
    public function setZipCode(?string $zip_code): self
    {
        $this->zip_code = $zip_code;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return $this
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @param float|null $latitude
     * @return $this
     */
    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @param float|null $longitude
     * @return $this
     */
    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getTimeZone(): ?string
    {
        return $this->time_zone;
    }

    /**
     * @param string|null $time_zone
     * @return $this
     */
    public function setTimeZone(?string $time_zone): self
    {
        $this->time_zone = $time_zone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAsn(): ?string
    {
        return $this->asn;
    }

    /**
     * @param string|null $asn
     * @return $this
     */
    public function setAsn(?string $asn): self
    {
        $this->asn = $asn;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAsnOrg(): ?string
    {
        return $this->asn_org;
    }

    /**
     * @param string|null $asn_org
     * @return $this
     */
    public function setAsnOrg(?string $asn_org): self
    {
        $this->asn_org = $asn_org;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    /**
     * @param string|null $hostname
     * @return $this
     */
    public function setHostname(?string $hostname): self
    {
        $this->hostname = $hostname;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getUserAgent(): ?array
    {
        return $this->user_agent;
    }

    /**
     * @param array|null $user_agent
     * @return $this
     */
    public function setUserAgent(?array $user_agent): self
    {
        $this->user_agent = $user_agent;
        return $this;
    }
}
