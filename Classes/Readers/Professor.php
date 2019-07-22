<?php


namespace Readers\Classes;


class Professor extends Person
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


}