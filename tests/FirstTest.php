<?php

class FirstTest extends \PHPUnit_Framework_TestCase
{
    public function testFirst()
    {
        $this->assertEquals(1, 1);
        $this->assertEquals(1 + 1, 2);


        $this->assertTrue(true);
        $this->assertTrue(1 < 2);
        $this->assertTrue(1 == 1);
        $this->assertTrue(1 == '1');


        $this->assertTrue(1 === 1);
        $this->assertTrue(100000 === 100000);
        $this->assertSame(1, 1);
        $this->assertFalse(1 === '1');
        $this->assertNotSame(1, '1');
    }

    public function testMax()
    {
        $this->assertTrue(max(1, 2, 3) === 3);
        $this->assertTrue(min(1, 2, 3) === 1);
    }
}