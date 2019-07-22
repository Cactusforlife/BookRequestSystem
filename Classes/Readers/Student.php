<?php


namespace Readers\Classes;


class Student extends Person
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


}