<?php
/**
 * This is the test for DependencyInjection class.
 *
 * @version 1.0 (09/01/2022)
 * @author  Antonio Campos (https://github.com/acamposserna)
 * @uses \PHPUnit\Framework\TestCase
 */

use Other\DependencyInjection\DependencyInjection;
use Other\DependencyInjection\Config;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase {

    /**
     * Tests that the object is injected into the class.
     * Create a Config object and inject it into the class
     * using the constructor.
     * Validates that the object has been injected successfully.
     */
    public function testDependencyInjection() {
        $config = new Config();
        $config->set("user", "acampos");
        $dependency_injection = new DependencyInjection($config);

        $this->assertSame("acampos", $dependency_injection->getUser());
    }
}