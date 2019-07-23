<?php


namespace Classes\Readers;


use Classes\BookStore\BookRequest;
use Exception;

class PublicPeople extends Reader
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


    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws Exception
     */
    public function addBook(BookRequest $bookRequest)
    {
        if(sizeof($this->getBooksListRequested()) < 2){
            throw new Exception('you can not request more than 2 books');
        }
    }

    public function equalsTo($reader) :bool
    {
        if(!$reader instanceof PublicPeople) {
            return false;
        }

        if($this->getEmail() == $reader->getEmail()){
            return false;
        }

        return true;
    }
}