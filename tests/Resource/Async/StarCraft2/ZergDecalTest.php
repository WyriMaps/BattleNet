<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Async\StarCraft2;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\StarCraft2\ZergDecal;

class ZergDecalTest extends AbstractResourceTest
{
    public function getSyncAsync() : string
    {
        return 'Async';
    }
    public function getClass() : string
    {
        return ZergDecal::class;
    }
    public function getNamespace() : string
    {
        return Apisettings::NAMESPACE;
    }
}
