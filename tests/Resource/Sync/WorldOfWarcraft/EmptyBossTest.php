<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync\WorldOfWarcraft;

use ApiClients\Tools\ResourceTestUtilities\AbstractEmptyResourceTest;
use WyriMaps\BattleNet\Resource\Sync\WorldOfWarcraft\EmptyBoss;

final class EmptyBossTest extends AbstractEmptyResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return EmptyBoss::class;
    }
}
