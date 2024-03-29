<?php

declare(strict_types=1);

namespace Tests\data\Paths;

use EDT\PathBuilding\End;
use EDT\PathBuilding\PropertyAutoPathInterface;
use EDT\PathBuilding\PropertyAutoPathTrait;

/**
 * @phpstan-ignore-next-line
 * @property-read End id
 */
class BrokenResource implements PropertyAutoPathInterface
{
    use PropertyAutoPathTrait;
}
