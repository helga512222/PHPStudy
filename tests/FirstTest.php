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


        $this->assertSame(1, (int) '1');
        $this->assertSame(1, (integer) '1');
    }

    public function testMax()
    {
        $this->assertTrue(max(1, 2, 3) === 3);
        $this->assertTrue(min(1, 2, 3) === 1);
    }

    public function testArray()
    {

        $big = 10;
        $this->assertTrue(($big / 2) === 5);
        $this->assertSame($big / 2, 5);
        $this->assertSame($big / 2 * 10, 50);
        $this->assertSame($big / 2 * 10 / 10, 5);
        $this->assertSame($big / 2 * (10 / 10), 5);

        $this->assertTrue(true);
        $this->assertFalse(false);

        $this->assertTrue(4 < 5);
        $this->assertTrue(4 < 5 === true);
        $this->assertFalse(6 < 5);
        $this->assertTrue(6 < 5 === false);
        $this->assertTrue((6 < 5 === false) === true);
        $this->assertTrue(((6 < 5 === false) === true) === true);

        $helga = 1;
        $this->assertTrue($helga === 1);
        $this->assertTrue($helga == '1');


        $helga = 2;
        $this->assertTrue($helga === 2);

        $helga = 'pataki';
        $this->assertTrue($helga === 'pataki');

        $this->assertTrue((bool) 1);
        $this->assertTrue((bool) 2);
        $this->assertFalse((bool) 0);
        $this->assertFalse((bool) 0.0);
    }
}