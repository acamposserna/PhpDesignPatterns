<?php
/**
 * This class generate some greetings messages.
 *
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Creational\SimpleFactory;

class Greeter {

    /**
     * Returns a greetings message.
     *
     * @param string $name Name to create message.
     * @return string Greetings message.
     */
    public function hello(string $name) {
        return "Hello " . $name . "!";
    }
}