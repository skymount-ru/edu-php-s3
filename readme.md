# S3 PHP Demo App

This app shows how to upload files to a S3 bucket.

```php
$helper = new \App\S3Helper();
$url = $helper->uploadFile(__DIR__ . '/clouds.jpg');
``` 
