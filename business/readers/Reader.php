<?php

namespace App\business\readers;

use App\business\bookstore\BookRequest;
use App\business\Comparable;
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
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct(int $readerNumber, string $name, string $email, string $phoneNumber)
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

    abstract public function validateBookRequest(BookRequest $bookRequest);

    /**
     * @param Reader $other
     * @return bool
     * @throws Exception
     */
    public function equalsTo($other): bool
    {

        if($this->getReaderNumber() == $other->getReaderNumber() || $this->getEmail() == $other->getEmail()){
            throw new Exception('its the same');
        }

        return true;
    }

}