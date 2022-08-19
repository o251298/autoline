<?php

namespace Unit\MoneyConvertor;

use App\Models\Transport;
use App\Services\MoneyConvertor\AmountConvertor;
use PHPUnit\Framework\TestCase;

class AmountConvertorTest extends TestCase
{
    /** @test */
    public function convert()
    {
        $transport = Transport::find(1);
        $transport->setUsa();
        $ex = AmountConvertor::convert(100000, AmountConvertor::USA);
        return $this->assertEquals($ex, $transport->getUsa());
    }

}