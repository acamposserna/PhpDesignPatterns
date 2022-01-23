<?php
/**
 * This class implements the singleton pattern that restricts the instantiation of a class
 * to one "single" instance. This is useful when you need only one object across all the
 * execution of the application.
 *
 * Use:
 *   $singleton = Singleton::getInstance();
 *
 * @version 1.0 (08/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 */

namespace Creational\Singleton;

class Singleton {

    // The only one instance of the class
    private static $instance;

    /**
     * Returns the only one instance of the class.
     * If the instance is not created, then create it.
     *
     * @return Singleton The only one instance of the class.
     */
    public static function getInstance() {
        if (!isset(self::$instance)) {
            $class = __CLASS__;
            self::$instance = new $class();
        }
        return self::$instance;
    }

    /**
     * Is not allowed to create objects to prevent from creating multiple instances.
     */
    private function __construct() {
    }

    /**
     * Is not allowed to clone objects to prevent from creating multiple instances.
     */
    private function __clone() {
    }


}