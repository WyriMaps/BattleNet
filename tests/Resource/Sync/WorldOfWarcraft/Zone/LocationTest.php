<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync\WorldOfWarcraft\Zone;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\Zone\Location;

class LocationTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return Location::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
