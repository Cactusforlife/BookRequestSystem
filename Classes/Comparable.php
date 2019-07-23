<?php

namespace Classes;


interface Comparable
{
    public function equalsTo($reader) : bool;
}