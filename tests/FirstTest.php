<?php

class FirstTest extends \PHPUnit_Framework_TestCase
{
    public function testFirst()
    {
        $this->assertEquals(1, 1);
        $this->assertEquals(1 + 1, 2);
    }
}