<?php declare(strict_types=1);

namespace WyriMaps\Tests\BattleNet\Resource\Sync\WorldOfWarcraft;

use ApiClients\Tools\ResourceTestUtilities\AbstractResourceTest;
use WyriMaps\BattleNet\ApiSettings;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\GuildAchievement;

class GuildAchievementTest extends AbstractResourceTest
{
    public function getSyncAsync(): string
    {
        return 'Sync';
    }

    public function getClass(): string
    {
        return GuildAchievement::class;
    }

    public function getNamespace(): string
    {
        return ApiSettings::NAMESPACE;
    }
}
