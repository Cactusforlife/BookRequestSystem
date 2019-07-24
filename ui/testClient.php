<?php

namespace App\business\ui;


use App\business\bookstore\Book;
use App\business\readers\Professor;
use App\business\System;


require_once('../vendor/autoload.php');



$system = new System();

$system->addReader(new Professor(1,1,'Miguel','miguel@miguel','961445852'));
$system->addReader(new Professor(2,1,'Miguel','miguel@miguel','961445852'));
$system->addBook(new Book(12345,'shit','shit','shit','shit'));

print_r($system->getReaders());


