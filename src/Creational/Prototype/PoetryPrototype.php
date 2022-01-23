<?php


namespace Creational\Prototype;


class PoetryPrototype extends BookPrototype {
    protected $category = 'Poetry';

    public function __clone() { }
}