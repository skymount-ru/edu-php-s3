<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load(); 

$app = new \App\S3Helper();
$url = $app->uploadFile(__DIR__ . '/clouds.jpg');

echo "URL: {$url}\n";
