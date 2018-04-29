<?php
namespace Atlas\Testing;

use Atlas\Pdo\Connection;
use Atlas\Testing\CompositeDataSource\SqliteFixture;

require dirname(__DIR__) . '/vendor/autoload.php';

$sq3 = dirname(__DIR__) . '/atlas-sqlite.sq3';
passthru("rm $sq3");

$dsn = "sqlite:{$sq3}";
$connection = Connection::new($dsn);
$sqliteFixture = new SqliteFixture($connection);
$sqliteFixture->exec();
unset($connection);

$config = [
    'pdo' => $dsn,
    'directory' => dirname(__DIR__) . '/src/CompositeDataSource',
    'namespace' => 'Atlas\Testing\CompositeDataSource'
];

file_put_contents(
    dirname(__DIR__) . '/atlas-config.php',
    '<?php return ' . var_export($config, true) . ';'
);

$cmd = dirname(__DIR__) . '/vendor/bin/atlas-skeleton.php';
passthru("php $cmd ./atlas-config.php");
