<?php


namespace App\business\bookstore;


use App\business\Comparable;
use Exception;

class Book implements Comparable
{
    private $ISBN;
    private $title;
    private $author;
    private $publisher;
    private $genre;

    /**
     * Book constructor.
     * @param $ISBN
     * @param $title
     * @param $author
     * @param $publisher
     * @param $genre
     */
    public function __construct(int $ISBN, string $title, string $author, string $publisher, string $genre)
    {
        $this->ISBN = $ISBN;
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->genre = $genre;
    }

    /**
     * @return int
     */
    public function getISBN()
    {
        return $this->ISBN;
    }

    /**
     * @param string $ISBN
     */
    public function setISBN($ISBN): void
    {
        $this->ISBN = $ISBN;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param string $author
     */
    public function setAuthor($author): void
    {
        $this->author = $author;
    }

    /**
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param string $publisher
     */
    public function setPublisher($publisher): void
    {
        $this->publisher = $publisher;
    }

    /**
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * @param string $genre
     */
    public function setGenre($genre): void
    {
        $this->genre = $genre;
    }


    /**
     * @param $other
     * @return bool
     * @throws Exception
     */
    public function equalsTo($other): bool
    {
        if($this->getISBN() == $other->getISBN()){
            return false;
        }
        return true;
    }
}