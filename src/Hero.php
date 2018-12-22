<?php

declare(strict_types=1);

namespace Foobar;

interface Hero
{
    public function getForce(): int;

    public function getImmunity(): int;

    public function getHealthPoints(): int;

    public function setHealthPoints(int $healthPoints);
}
