<?php

namespace Readers\Classes;

class Person
{
    private $readerNumber;
    private $name;
    private $email;
    private $phoneNumber;
    private $booksRequested;

    /**
     * Person constructor.
     * @param $readerNumber
     * @param $name
     * @param $email
     * @param $phoneNumber
     * @param $bookList
     */
    public function __construct(int $readerNumber, int $name, string $email, array $phoneNumber)
    {
        $this->readerNumber = $readerNumber;
        $this->name = $name;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->booksRequested = [];
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
    public function getBooksRequested()
    {
        return $this->booksRequested;
    }

    /**
     * @param mixed $booksRequested
     */
    public function setBooksRequested($booksRequested)
    {
        $this->booksRequested = $booksRequested;
    }


}