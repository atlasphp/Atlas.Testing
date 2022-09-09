<?php
require dirname(__DIR__) . "/vendor/autoload.php";

use Atlas\Pdo\Connection;

$root = dirname(__DIR__);
$spaces = ['CompositeDataSource', 'DataSource'];

foreach ($spaces as $space) {
    // remove prior sq3 file
    $sq3 = "{$root}/tmp/{$space}.sq3";
    unlink($sq3);

    // populate new sq3 file
    $connection = Connection::new("sqlite:{$sq3}");
    $fixtureClass = "Atlas\\Testing\\{$space}Fixture";
    $fixture = new $fixtureClass($connection);
    $fixture->exec();

    // generate classes
    $cmd = "{$root}/vendor/bin/atlas-skeleton-upgrade.php";
    passthru("php {$cmd} {$root}/config/{$space}.php");
}
