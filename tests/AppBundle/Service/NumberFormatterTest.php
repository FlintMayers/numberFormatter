<?php
/**
 * Created by PhpStorm.
 * User: t0000678
 * Date: 11/10/17
 * Time: 7:40 PM
 */

namespace Tests\AppBundle\Service;


use AppBundle\Service\NumberFormatter;
use PHPUnit\Framework\TestCase;

class NumberFormatterTest extends TestCase
{

    /**
     * @dataProvider formatterProvider
     */
    public function testFormat($num, $expected) {
        $formatter = new NumberFormatter();
        $this->assertEquals($expected, $formatter->format($num));
    }

    public function formatterProvider(){
        return [
            [2835779, '2.84M'],
            [1000000, '1.00M'],
            [999500, '1.00M'],
            [535216, '535K'],
            [99950, '100K'],
            [27533.78, '27 534'],
            [533.1, '533.10'],
            [66.6666, '66.67'],
            [12.00, '12'],
            [-12.00, '-12'],
            [-66.6666, '-66.67'],
            [-533.1, '-533.10'],
            [-27533.78, '-27 534'],
            [-99950, '-100K'],
            [-535216, '-535K'],
            [-999500, '-1.00M'],
            [-1000000, '-1.00M'],
            [-2835779, '-2.84M']
        ];
    }
}