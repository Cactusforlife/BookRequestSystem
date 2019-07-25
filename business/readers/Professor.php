<?php


namespace App\business\readers;


use App\business\bookstore\BookRequest;
use Exception;

class Professor extends Reader
{
    private $workerNumber;
    private $subjects;


    /**
     * Professor constructor.
     * @param int $workerNumber
     * @param int $readerNumber
     * @param string $name
     * @param string $email
     * @param string $phoneNumber
     */
    public function __construct(int $workerNumber, int $readerNumber, string $name, string $email, string $phoneNumber)
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

    private function validateListOfBooks(BookRequest $bookRequest): bool{

        if(sizeof($bookRequest->getReader()->getBooksListRequested()) < 10){
            return true;
        }
        return false;
    }

    public function validateBookRequest(BookRequest $bookRequest)
    {
        $this->validateListOfBooks($bookRequest);
    }


    /**
     * @param BookRequest $bookRequest
     * @return mixed
     * @throws Exception
     */
    public function addBook(BookRequest $bookRequest)
    {
        $this->validateBookRequest($bookRequest);
    }

    public function equalsTo(Reader $other): bool
    {

        if( $other instanceof Professor){

            if($this->getReaderNumber() == $other->getReaderNumber() || $this->workerNumber == $other->getWorkerNumber() || $this->getEmail() == $other->getEmail()){
                throw new Exception('its the same');
            }
        }
        else{

            if($this->getReaderNumber() == $other->getReaderNumber() || $this->getEmail() == $other->getEmail()){
                throw new Exception('its the same');
            }

        }

        return true;

    }


}