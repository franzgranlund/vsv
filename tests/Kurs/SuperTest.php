<?php

class SuperTest extends \PHPUnit_Framework_TestCase {

    public function testAddOne()
    {
        $s = new Kurs\Super();
        $this->assertEquals(1, $s->addOne(0));
    }

    public function testAddTwo()
    {
        $s = new Kurs\Super();
        $this->assertEquals(4, $s->addTwo(2));
    }
}
?>