<?php

namespace Classes\Readers;

use Classes\BookStore\BookRequest;
use Classes\Comparable;
use Exception;

abstract class Reader implements Comparable
{
    private $readerNumber;
    private $name;
    private $email;
    private $phoneNumber;
    private $booksListRequested;

    /**
     * Reader constructor.
     * @param int $readerNumber
     * @param int $name
     * @param string $email
     * @param array $phoneNumber
     */
    public function __construct(int $readerNumber, int $name, string $email, array $phoneNumber)
    {
        $this->readerNumber = $readerNumber;
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->booksListRequested = [];
    }

    /**
     * @return mixed
     */
    public function getReaderNumber()
    {
        return $this->readerNumber;
    }

    /**
     * @param mixed $readerNumber
     */
    public function setReaderNumber($readerNumber)
    {
        $this->readerNumber = $readerNumber;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getBooksListRequested()
    {
        return $this->booksListRequested;
    }

    /**
     * @param mixed $booksListRequested
     */
    public function setBooksListRequested($booksListRequested)
    {
        $this->booksListRequested = $booksListRequested;
    }

    /**
     * @param BookRequest $bookRequest
     * @return mixed
     */
    abstract public function addBook(BookRequest $bookRequest);
    
    abstract public function validatebookRequest(BookRequest $bookRequest);

    public function equalsTo($reader): bool
    {
        if(!$reader instanceof Reader) {
            return false;
        }

        if($this->getEmail() == $reader->getEmail()){
            return false;
        }

        return true;
    }

}