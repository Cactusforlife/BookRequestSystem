<?php


namespace App\business\bookstore;

use App\business\readers\Reader;

class BookRequest
{
    private $reader;
    private $book;
    private $requestDate;
    private $status;
    private $closeDate;

    /**
     * BookRequest constructor.
     * @param Reader $reader
     * @param Book $book
     */
    public function __construct(Reader $reader, Book $book)
    {
        $this->reader = $reader;
        $this->book = $book;
        $this->requestDate = date('Y-m-d H:i:s');
        $this->status = 'OPEN';
    }

    /**
     * @return Reader
     */
    public function getReader(): Reader
    {
        return $this->reader;
    }

    /**
     * @param Reader $reader
     */
    public function setReader(Reader $reader): void
    {
        $this->reader = $reader;
    }

    /**
     * @return Book
     */
    public function getBook(): Book
    {
        return $this->book;
    }

    /**
     * @param Book $book
     */
    public function setBook(Book $book): void
    {
        $this->book = $book;
    }

    /**
     * @return false|string
     */
    public function getRequestDate()
    {
        return $this->requestDate;
    }

    /**
     * @param false|string $requestDate
     */
    public function setRequestDate($requestDate): void
    {
        $this->requestDate = $requestDate;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * @param mixed $closeDate
     */
    public function setCloseDate($closeDate): void
    {
        $this->closeDate = $closeDate;
    }

    public function closeRequest()
    {
        $this->status = 'CLOSED';
        $this->closeDate = date('Y-m-d H:i:s');
    }





}