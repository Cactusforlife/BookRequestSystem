<?php


namespace Classes\Readers;


use Classes\BookStore\BookRequest;
use Exception;

class Student extends Reader
{
    private $studentNumber;
    private $course;
    private $workerStatus;

    /**
     * Student constructor.
     * @param int $studentNumber
     * @param string $course
     * @param bool $workerStatus
     * @param int $readerNumber
     * @param int $name
     * @param string $email
     * @param array $phoneNumber
     */
    public function __construct(int $studentNumber, string $course, bool $workerStatus, int $readerNumber, int $name, string $email, array $phoneNumber)
    {
        $this->studentNumber = $studentNumber;
        $this->course = $course;
        $this->workerStatus = $workerStatus;
        parent::__construct($readerNumber, $name, $email, $phoneNumber);
    }

    /**
     * @return int
     */
    public function getStudentNumber(): int
    {
        return $this->studentNumber;
    }

    /**
     * @param int $studentNumber
     */
    public function setStudentNumber(int $studentNumber): void
    {
        $this->studentNumber = $studentNumber;
    }

    /**
     * @return string
     */
    public function getCourse(): string
    {
        return $this->course;
    }

    /**
     * @param string $course
     */
    public function setCourse(string $course): void
    {
        $this->course = $course;
    }

    /**
     * @return mixed
     */
    public function getWorkerStatus()
    {
        return $this->workerStatus;
    }

    /**
     * @param mixed $workerStatus
     */
    public function setWorkerStatus($workerStatus): void
    {
        $this->workerStatus = $workerStatus;
    }
  
    /*
    *   validações $reader,$book,$requestDate,$status,$closeDate;
    *
    */
    
    private function validadelistofBooks()
    {
        if(sizeof($this->getBooksListRequested()) < 5)
        {
            throw new Exception('you can not request more than 5 books');
        }
    }

    /* 
    *   validade total
    */
    private function validadebookRequest(BookRequest $bookRequest)
    {
        $this->validadelistofBooks($bookRequest);
    }    
    
    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws \Exception
     */
    public function addBook(BookRequest $bookRequest)
    {
       $this->validatebookRequest($bookRequest);
    }
    
    
    public function equalsTo($reader) : bool
    {
        if(!$reader instanceof Student) {
            return false;
        }

        if($this->studentNumber == $reader->getStudentNumber()){
            return false;
        }

        return true;
    }
}