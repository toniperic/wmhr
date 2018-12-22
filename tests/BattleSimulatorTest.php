<?php

declare(strict_types=1);

namespace Tests;

use Foobar\BattleSimulator;
use Foobar\DamageCalculator;
use Foobar\Hero;
use PHPUnit\Framework\TestCase;

final class BattleSimulatorTest extends TestCase
{
    public function testItDeductsHealthPointsFromDefenderForGivenDamage()
    {
        $damageCalculator = $this->createMock(DamageCalculator::class);
        $damageCalculator->method('calculateDamage')->willReturn(4);

        $defender = $this->createConfiguredMock(Hero::class, [
            'getHealthPoints' => 10
        ]);
        $defender->expects($this->once())->method('setHealthPoints')->with($this->equalTo(6));

        $simulator = new BattleSimulator($damageCalculator);
        $simulator->fight($this->createMock(Hero::class), $defender);
    }
}
