<?php

namespace App\business\ui;


use App\business\bookstore\Book;
use App\business\readers\Professor;
use App\business\readers\Student;
use App\business\System;


require_once('../vendor/autoload.php');



$system = new System();

$system->addReader(new Professor(1,4,'Miguel','hehe@hehe','32131'));
$system->addReader(new Professor(2,3,'Miguel','31@hehe','32131'));
$system->addReader(new Student(1,'fuck',true,5,'MIguye','tsa','1232131'));


$system->addBook(new Book(12345,'shit','shit','shit','shit'));

print_r($system->getReaders());