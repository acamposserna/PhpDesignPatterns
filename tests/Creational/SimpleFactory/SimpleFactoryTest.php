<?php
/**
 * This is the test for SimpleFactory class.
 *
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 * @uses \PHPUnit\Framework\TestCase
 */

use Creational\SimpleFactory\SimpleFactory;
use Creational\SimpleFactory\Greeter;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase {

    /**
     * Test of object creation from SimpleFactory class.
     * Validate that the created object is from the Greeter class.
     */
    public function testCreateGreeter() {
        $factory = new SimpleFactory();
        $greeter = $factory->createGreeter();
        $this->assertInstanceOf(Greeter::class, $greeter);
    }
}