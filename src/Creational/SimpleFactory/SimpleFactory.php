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
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Creational\SimpleFactory;

class SimpleFactory {

    /**
     * Method to create a Greeter object.
     *
     * @return Greeter
     */
    public function createGreeter() {
        return new Greeter();
    }
}