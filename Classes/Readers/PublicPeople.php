<?php


namespace Readers\Classes;


class PublicPeople extends Person
{

    private $address;

    /**
     * PublicPeople constructor.
     * @param int $readerNumber
     * @param int $name
     * @param string $email
     * @param array $phoneNumber
     * @param Address $address
     */
    public function __construct(int $readerNumber, int $name, string $email, array $phoneNumber, Address $address)
    {
        parent::__construct($readerNumber, $name, $email, $phoneNumber);
        $this->address = $address;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     */
    public function setAddress(Address $address): void
    {
        $this->address = $address;
    }



}