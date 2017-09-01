<?php

class IndexTest extends \PHPUnit\Framework\TestCase
{
    public function correctValues()
    {
        return [
            'zeros' => [0, 0, 0],
            'all positive' => [2, 3, 5],
            'one negative' => [-7, 4, -3],
            'all negative' => [-7, -4, -11],
        ];
    }

    public function incorrectValues()
    {
        return [
            [1, -1, 1]
        ];
    }

    /**
     * @dataProvider correctValues
     */
    public function testCorrectSum($a, $b, $sum)
    {
        $this->assertEquals($sum, (new Index)->sum($a, $b));
    }

    /**
     * @dataProvider incorrectValues
     */
    public function testWrongSum($a, $b, $sum)
    {
        $this->assertNotEquals($sum, (new Index)->sum($a, $b));
    }
}