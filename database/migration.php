<?php
require_once __DIR__ . '/../vendor/autoload.php';
$config = require __DIR__ . '/../config/config.php';
try {
    $pdo = new PDO("pgsql:host={$config['db']['host']};port={$config['db']['port']};dbname={$config['db']['name']}", $config['db']['user'], $config['db']['password']);
    $sql = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . "migrations" . DIRECTORY_SEPARATOR . "create_tasks_table.sql");
    $pdo->exec($sql);
    echo "Migration successful.";
} catch (PDOException $e) {
    echo "Migration failed: " . $e->getMessage();
}