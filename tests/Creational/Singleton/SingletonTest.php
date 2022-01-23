<?php
/**
 * This is the test for Singleton class.
 *
 * @version 1.0 (08/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 * @uses \PHPUnit\Framework\TestCase
 */

use Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

class SingletonTest extends TestCase {

    /**
     * Test that the instance is unique.
     * Instantiate two objects using the getInstance method.
     * Validate that they are of the Singleton class and that they are the same object.
     */
    public function testUniqueness() {
        $firstObject = Singleton::getInstance();
        $secondObject = Singleton::getInstance();

        $this->assertInstanceOf(Singleton::class, $firstObject);
        $this->assertInstanceOf(Singleton::class, $secondObject);
        $this->assertSame($firstObject, $secondObject);
    }
}