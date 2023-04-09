<?php
define('APP_DIR', dirname(__FILE__) . '/../');

require realpath(__DIR__ . '/../../vendor/autoload.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require('config.php');
require('functions.php');
require('auth_function.php');
require('data/data.class.php');
require('data/mysqldataprovider.class.php');

Data::initialize(
    new MySQLDataProvider(sprintf(
        'mysql:dbname=%s;host=%s;port=%s',
        $_ENV['DB_NAME'],
        $_ENV['DB_HOST'],
        $_ENV['DB_PORT']
    ))
);
