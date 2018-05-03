<?php
namespace Atlas\Testing;

use Atlas\Pdo\Connection;

require dirname(__DIR__) . '/vendor/autoload.php';

$dataSource = function () {
    $sq3 = dirname(__DIR__) . '/atlas-sqlite.sq3';
    passthru("rm $sq3");

    $dsn = "sqlite:{$sq3}";
    $connection = Connection::new($dsn);
    $fixture = new DataSourceFixture($connection);
    $fixture->exec();
    unset($connection);

    $dir = dirname(__DIR__) . '/src/DataSource';
    if (! is_dir()) {
        mkdir($dir);
    }

    $config = [
        'pdo' => $dsn,
        'directory' => $dir,
        'namespace' => 'Atlas\Testing\DataSource'
    ];

    file_put_contents(
        dirname(__DIR__) . '/atlas-config.php',
        '<?php return ' . var_export($config, true) . ';'
    );

    $cmd = dirname(__DIR__) . '/vendor/bin/atlas-skeleton.php';
    passthru("php $cmd ./atlas-config.php");
};
$dataSource();

$compositeDataSource = function () {
    $sq3 = dirname(__DIR__) . '/atlas-sqlite.sq3';
    passthru("rm $sq3");

    $dsn = "sqlite:{$sq3}";
    $connection = Connection::new($dsn);
    $fixture = new CompositeDataSourceFixture($connection);
    $fixture->exec();
    unset($connection);

    $dir = dirname(__DIR__) . '/src/CompositeDataSource';
    if (! is_dir()) {
        mkdir($dir);
    }

    $config = [
        'pdo' => $dsn,
        'directory' => $dir,
        'namespace' => 'Atlas\Testing\CompositeDataSource'
    ];

    file_put_contents(
        dirname(__DIR__) . '/atlas-config.php',
        '<?php return ' . var_export($config, true) . ';'
    );

    $cmd = dirname(__DIR__) . '/vendor/bin/atlas-skeleton.php';
    passthru("php $cmd ./atlas-config.php");
};
$compositeDataSource();
