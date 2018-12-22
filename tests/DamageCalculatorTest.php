<?php
declare(strict_types=1);

namespace Tests;

use Foobar\DamageCalculator;
use PHPUnit\Framework\TestCase;

final class DamageCalculatorTest extends TestCase
{
    /**
     * @var DamageCalculator
     */
    protected $calculator;

    protected function setUp()
    {
        $this->calculator = new DamageCalculator();
    }

    public function testDamageCalculation()
    {
        $this->assertEquals(2, $this->calculator->calculateDamage($attackerForce = 10, $defenderForce = 8));
    }

    public function testDamageIsZeroIfDefenderForceIsStronger()
    {
        $this->assertEquals(0, $this->calculator->calculateDamage($attackerForce = 10, $defenderForce = 20));
    }
}
