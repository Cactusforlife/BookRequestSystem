<?php


namespace Classes\Readers;


use Classes\BookStore\BookRequest;
use Exception;

class Professor extends Reader
{
    private $workerNumber;
    private $subjects;


    /**
     * Professor constructor.
     * @param int $workerNumber
     * @param int $readerNumber
     * @param int $name
     * @param string $email
     * @param array $phoneNumber
     */
    public function __construct(int $workerNumber, int $readerNumber, int $name, string $email, array $phoneNumber)
    {
        $this->workerNumber = $workerNumber;
        $this->subjects = [];
        parent::__construct($readerNumber, $name, $email, $phoneNumber);
    }

    /**
     * @return int
     */
    public function getWorkerNumber(): int
    {
        return $this->workerNumber;
    }

    /**
     * @param int $workerNumber
     */
    public function setWorkerNumber(int $workerNumber): void
    {
        $this->workerNumber = $workerNumber;
    }

    /**
     * @return array
     */
    public function getSubjects(): array
    {
        return $this->subjects;
    }

    /**
     * @param array $subjects
     */
    public function setSubjects(array $subjects): void
    {
        $this->subjects = $subjects;
    }


    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws Exception
     */
    public function addBook(BookRequest $bookRequest)
    {
        if(sizeof($this->getBooksListRequested()) < 10){
            throw new Exception('you can not request more than 10 books');
        }
    }

    public function equalsTo($reader): bool
    {
        if(!$reader instanceof Professor) {
            return false;
        }

        if($this->workerNumber == $reader->getWorkerNumber()){
            return false;
        }

        return true;

    }
}