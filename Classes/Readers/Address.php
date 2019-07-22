<?php


namespace Readers\Classes;


class Address
{
    private $street;
    private $doorNumber;
    private $apartmentFloor;
    private $postalCode;

    /**
     * Address constructor.
     * @param $street
     * @param $doorNumber
     * @param $apartmentFloor
     * @param $postalCode
     */
    public function __construct(string $street, int $doorNumber, string $postalCode, $apartmentFloor = null)
    {
        $this->street = $street;
        $this->doorNumber = $doorNumber;
        $this->apartmentFloor = $apartmentFloor;
        $this->postalCode = $postalCode;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     */
    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    /**
     * @return int
     */
    public function getDoorNumber(): int
    {
        return $this->doorNumber;
    }

    /**
     * @param int $doorNumber
     */
    public function setDoorNumber(int $doorNumber): void
    {
        $this->doorNumber = $doorNumber;
    }

    /**
     * @return null
     */
    public function getApartmentFloor()
    {
        return $this->apartmentFloor;
    }

    /**
     * @param null $apartmentFloor
     */
    public function setApartmentFloor($apartmentFloor): void
    {
        $this->apartmentFloor = $apartmentFloor;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     */
    public function setPostalCode(string $postalCode): void
    {
        $this->postalCode = $postalCode;
    }




}