<?php


namespace Classes\Readers;


class Address
{
    private $street;
    private $doorNumber;
    private $postalCode;
    private $apartment;
    private $apartmentFloor;

    /**
     * Address constructor.
     * @param string $street
     * @param int $doorNumber
     * @param string $postalCode
     * @param null $apartment
     * @param $apartmentFloor
     */
    public function __construct(string $street, int $doorNumber, string $postalCode, $apartment = null, $apartmentFloor = null)
    {
        $this->street = $street;
        $this->doorNumber = $doorNumber;
        $this->postalCode = $postalCode;
        $this->apartment = $apartment;
        $this->apartmentFloor = $apartmentFloor;
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