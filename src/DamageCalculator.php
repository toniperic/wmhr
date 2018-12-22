<?php
declare(strict_types=1);

namespace Foobar;

class DamageCalculator
{
    public function calculateDamage(int $attackerForce, int $defenderForce): int
    {
        if ($attackerForce < $defenderForce) {
            return 0;
        }

        return (int) round($attackerForce - $defenderForce);
    }
}
