<?php

namespace App\business;


use App\business\readers\Reader;

interface Comparable
{
    public function equalsTo(Reader $other) : bool;
}