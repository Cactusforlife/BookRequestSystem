<?php


use Classes\BookStore\Book;
use Classes\Readers\Professor;
use Classes\Readers\PublicPeople;
use Classes\Readers\Reader;
use Classes\Readers\Student;

class System
{
    public static $readerNumber;
    private $readers;
    private $books;

    /**
     * System constructor.
     */
    public function __construct()
    {
        $this->readers = [];
        $this->books = [];
    }

    /**
     * @return array
     */
    public function getReaders(): array
    {
        return $this->readers;
    }

    /**
     * @return array
     */
    public function getBooks(): array
    {
        return $this->books;
    }

    public function addBook(Book $book)
    {
        foreach ($this->books as $libraryBook){
            $libraryBook->equalsTo($book);
        }

    }

    public function addReader(Reader $reader)
    {

        if($reader instanceof Professor){
            $this->addProfessor($reader);
        }

        if($reader instanceof Student){
            $this->addStudent($reader);
        }

        if($reader instanceof PublicPeople){
            $this->addPublicPeople($reader);
        }


    }

    public function requestBook($readerId, $ISBN)
    {

    }

    private function addProfessor(Professor $professor)
    {
        foreach($this->readers as $reader){
            if($professor->equalsTo($reader)){

                $professor->setReaderNumber(self::$readerNumber++);
                array_push($this->readers, $professor);
            };
        }
    }

    private function addStudent(Student $student)
    {
        foreach($this->readers as $reader){
            if($student->equalsTo($reader)){

                $student->setReaderNumber(self::$readerNumber++);
                array_push($this->readers, $student);
            };
        }
    }

    private function addPublicPeople(PublicPeople $publicPeople)
    {
        foreach($this->readers as $reader){
            if($publicPeople->equalsTo($reader)){
                $publicPeople->setReaderNumber(self::$readerNumber++);
                array_push($this->readers, $publicPeople);
            };
        }
    }
    
    


}

