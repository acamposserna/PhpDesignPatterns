<?php

use Creational\Prototype\NovelPrototype;
use Creational\Prototype\PoetryPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase {

    public function testCreateBooks() {
        $novelPrototype = new NovelPrototype();
        $poetryPrototype = new PoetryPrototype();

        for ($i = 0; $i < 5; $i++) {
            $novelBook =  clone $novelPrototype;
            $novelBook->setTitle('Novel nº ' . $i);
            $this->assertInstanceOf(NovelPrototype::class, $novelBook);

            $poetryBook = clone $poetryPrototype;
            $poetryBook->setTitle('Poetry nº ' . $i);
            $this->assertInstanceOf(PoetryPrototype::class, $poetryBook);
        }
    }
}