<?php
/**
 * This class implements the Simple Factory pattern that is used to encapsulate to
 * object creation.
 * In the Factory you can create only one object or some dependent objects.
 *
 * Use:
 *   $factory = new SimpleFactory();
 *   $greeter = $factory->createGreeter();
 *   $greeter->hello('World');
 *
 * @version 1.0 (13/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Creational\Prototype;

abstract class BookPrototype {
    protected $title;
    protected $category;

    abstract public function __clone();

    public function getTitle() {
        return $this->title;
    }

    public function setTitle($title) {
        $this->title = $title;
    }
}