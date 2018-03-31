<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync\WorldOfWarcraft;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Spell;

class SpellTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Spell::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
