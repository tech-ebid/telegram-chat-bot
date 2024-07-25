<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
return  [
    'db' => [
        'host' => $_ENV['DB_HOST'],
        'port' => $_ENV['DB_PORT'],
        'name' => $_ENV['DB_NAME'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
    ],
    'smtp' => [
        'host' => $_ENV['SMTP_HOST'],
        'user' => $_ENV['SMTP_USER'],
        'password' => $_ENV['SMTP_PASS'],
        'port' => $_ENV['SMTP_PORT'],
        'secure' => $_ENV['SMTP_SECURE'],
    ],
    'jwt' => [
        'secret' => $_ENV['JWT_SECRET'],
        'algorithm' => $_ENV['JWT_ALGORITHM'],
    ],
    'random_string' => $_ENV['RANDOM_STRING_KEY'],
    'password_key_encryption' => $_ENV['PASSWORD_KEY_ENCRYPTION'],
    'telegram_token' => $_ENV['TELEGRAM_TOKEN']

];