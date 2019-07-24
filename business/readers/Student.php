<?php


namespace App\business\Readers;


use App\business\bookstore\BookRequest;
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
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct(int $studentNumber, string $course, bool $workerStatus, int $readerNumber, string $name, string $email, string $phoneNumber)
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
    
    private function validadeListOfBooks(BookRequest $bookRequest)
    {
        if(sizeof($this->getBooksListRequested()) < 5)
        {
            throw new Exception('you can not request more than 5 books');
        }
    }

    public function validateBookRequest(BookRequest $bookRequest)
    {

    }

    
    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws \Exception
     */
    public function addBook(BookRequest $bookRequest)
    {
       $this->validateBookRequest($bookRequest);
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