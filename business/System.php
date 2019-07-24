<?php

namespace App\business;


use App\business\bookstore\Book;
use App\business\bookstore\BookRequest;
use App\business\readers\Professor;
use App\business\readers\PublicPeople;
use App\business\readers\Reader;
use App\business\Readers\Student;
use Exception;

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
        if($this->books == null){
            array_push($this->books, $book);
            return 'Book sucessfully added';
        }

        foreach ($this->books as $libraryBook){
            $libraryBook->equalsTo($book);
            array_push($this->books, $book);
        }

        return 'Book sucessfully added';

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

    public function requestBook(BookRequest $bookRequest)
    {
        foreach($this->readers as $reader){
            if($reader->equalsTo($bookRequest->getReader())){
                $reader->validateBookRequest($bookRequest);
            }
        }

    }

    private function addProfessor(Professor $professor)
    {
        if($this->getReaders() == null){
            $professor->systemNumber = self::$readerNumber++;
            array_push($this->readers, $professor);
            return 'added successfully';
        }

        foreach($this->readers as $reader){
            if($professor->equalsTo($reader)){

                $professor->systemNumber = self::$readerNumber++;
                array_push($this->readers, $professor);

            } else {
                return new Exception('this Reader is already inserted');
            }
        }

        return 'added successfully';
    }

    private function addStudent(Student $student)
    {
        if($this->getReaders() == null){
            $student->systemNumber = self::$readerNumber++;
            array_push($this->readers, $student);
        }

        foreach($this->readers as $reader){
            if($student->equalsTo($reader)){

                $student->systemNumber = self::$readerNumber++;
                array_push($this->readers, $student);
            }else{
                return new Exception('this Reader is already inserted');
            }
        }
        return 'added successfully';
    }

    private function addPublicPeople(PublicPeople $publicPeople)
    {
        if($this->getReaders() == null){
            $publicPeople->systemNumber = self::$readerNumber++;
            array_push($this->readers, $publicPeople);
        }

        foreach($this->readers as $reader){
            if($publicPeople->equalsTo($reader)){

                $publicPeople->systemNumber = self::$readerNumber++;
                array_push($this->readers, $publicPeople);
            } else{
                return new Exception('this Reader is already inserted');
            }
        }
        return 'added successfully';
    }
    
    


}

