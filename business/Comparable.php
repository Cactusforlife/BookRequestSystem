<?php

namespace App\business;


interface Comparable
{
    public function equalsTo($reader) : bool;
}