<?php


namespace App\business\readers;


use App\business\bookstore\BookRequest;
use Exception;

class PublicPeople extends Reader
{

    private $address;

    /**
     * PublicPeople constructor.
     * @param int $readerNumber
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     * @param Address $address
     */
    public function __construct(int $readerNumber, string $name, string $email, string $phoneNumber, Address $address)
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



    public function validateBookRequest(BookRequest $bookRequest)
    {
        // TODO: Implement validateBookRequest() method.
    }


    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws Exception
     */
    public function addBook(BookRequest $bookRequest)
    {

    }

    public function equalsTo($other) :bool
    {

        if($this->getReaderNumber() == $other->getReaderNumber() || $this->getEmail() == $other->getEmail()){
            throw new Exception('its the same');
        }

        return true;
    }
}