<?php

namespace Daniel\KataPairer\Tests;

use Daniel\KataPairer\Pair;
use Daniel\KataPairer\Pairer;
use Daniel\KataPairer\Round;
use PHPUnit\Framework\TestCase;

class PairerTest extends TestCase
{
    public function testPair(): void
    {
        $round2 = (new Pairer())->round2(Round::create(
            Pair::create(driver: "Daniel", navigator: "Alvaro"),
            Pair::create(driver: "Carlos", navigator: "Ihor"),
            Pair::create(driver: "Anton", navigator: "Cristian"),
            Pair::create(driver: "Manuel", navigator: "Roman"),
        ));

        self::assertEquals(Round::create(
            Pair::create(driver: "Alvaro", navigator: "Carlos"),
            Pair::create(driver: "Ihor", navigator: "Anton"),
            Pair::create(driver: "Cristian", navigator: "Manuel"),
            Pair::create(driver: "Roman", navigator: "Daniel"),
        ), $round2);
    }
}
