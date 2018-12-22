<?php
declare(strict_types=1);

namespace Foobar;

final class BattleSimulator
{
    private $damageCalculator;

    public function __construct(DamageCalculator $damageCalculator)
    {
        $this->damageCalculator = $damageCalculator;
    }

    public function fight(Hero $attacker, Hero $defender)
    {
        $damage = $this->damageCalculator->calculateDamage($attacker->getForce(), $defender->getForce());

        $defender->setHealthPoints($defender->getHealthPoints() - $damage);
    }
}
