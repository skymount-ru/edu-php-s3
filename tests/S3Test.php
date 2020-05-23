<?php


use PHPUnit\Framework\TestCase;

class S3Test extends TestCase
{
    public function testFileUpload(): void
    {
        // require dirname(__DIR__) . '/vendor/autoload.php';

        $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
        $dotenv->load();

        $app = new \App\S3Helper();
        $url = $app->uploadFile(__DIR__ . '/assets/clouds.jpg');
        $this->assertEquals('clouds.jpg', basename($url));
    }
}
