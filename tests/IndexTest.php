<?php

class IndexTest extends \PHPUnit\Framework\TestCase
{
    public function correctValues()
    {
        return [
            [0, 0, 0],
            [2, 3, 5],
            [-7, 4, -3],
            [-7, -4, -11],
        ];
    }

    /**
     * @dataProvider correctValues
     */
    public function testCorrectSum($a, $b, $sum)
    {
        $this->assertEquals($sum, (new Index)->sum($a, $b));
    }
}