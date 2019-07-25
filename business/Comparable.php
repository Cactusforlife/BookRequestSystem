<?php

namespace App\business;


interface Comparable
{
    public function equalsTo($other) : bool;
}