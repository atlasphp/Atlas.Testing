<?php return [
    'pdo' => [
        'sqlite:' . dirname(__DIR__) . '/tmp/CompositeDataSource.sq3',
    ],
    'namespace' => 'Atlas\\Testing\\CompositeDataSource',
    'directory' => dirname(__DIR__) . '/src/CompositeDataSource',
];
