<?php return [
    'pdo' => [
        'sqlite:' . dirname(__DIR__) . '/tmp/DataSource.sq3',
    ],
    'namespace' => 'Atlas\\Testing\\DataSource',
    'directory' => dirname(__DIR__) . '/src/DataSource',
];
