<?php declare(strict_types=1);
use function ApiClients\Foundation\resource_pretty_print;
use React\EventLoop\Factory;
use WyriMaps\BattleNet\Resource\WorldOfWarcraft\PetInterface;

require dirname(__DIR__) . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

$loop = Factory::create();
$client = require 'create_client-async.php';

$client->worldOfWarcraft()->pets()->subscribe(function (PetInterface $pet) {
    resource_pretty_print($pet);
}, function ($e) {
    echo (string)$e;
});

$loop->run();
