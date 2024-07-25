<?php
use Illuminate\Database\Capsule\Manager as Capsule;

$config = require_once __DIR__ . '/config.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'pgsql',
    'host'      => $config['db']['host'],
    'port'      => $config['db']['port'],
    'database'  => $config['db']['name'],
    'username'  => $config['db']['user'],
    'password'  => $config['db']['password'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();
