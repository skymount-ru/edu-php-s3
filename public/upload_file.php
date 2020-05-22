<?php

require dirname(__DIR__) . '/vendor/autoload.php';

$app = new \App\S3Helper();
$app->uploadFile(__DIR__ . '/clouds.jpg');
