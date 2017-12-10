<?php

namespace Sprain\SwissQrBill\DataGroups;

class Creditor
{
    /**
     * The creditor's name or company name according to the account name.
     * Always matches the account holder.
     *
     * @var string
     */
    private $name;

    /**
     * Street / P.O. box of the creditor.
     * May not include building or house number.
     *
     * @var string
     */
    private $street;

    /**
     * House number of the creditor
     *
     * @var string
     */
    private $houseNumber;

    /**
     * Postal code of the creditor,
     * without county code
     *
     * @var string
     */
    private $postalCode;

    /**
     * City of the creditor
     *
     * @var string
     */
    private $city;

    /**
     * Country of the creditor (ISO 3166-1)
     * @var string
     */
    private $country;


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name) : self
    {
        $this->name = $name;

        return $this;
    }

    public function getStreet(): string
    {
        return $this->street;
    }

    public function setStreet(string $street) : self
    {
        $this->street = $street;

        return $this;
    }

    public function getHouseNumber(): string
    {
        return $this->houseNumber;
    }

    public function setHouseNumber(string $houseNumber) : self
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city) : self
    {
        $this->city = $city;

        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country) : self
    {
        $this->country = $country;

        return $this;
    }
}