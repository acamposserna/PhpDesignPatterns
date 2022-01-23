<?php


namespace Creational\Prototype;


class NovelPrototype extends BookPrototype {
    protected $category = 'Novel';

    public function __clone() { }
}