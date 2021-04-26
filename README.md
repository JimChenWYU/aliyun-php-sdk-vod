# aliyun-php-sdk-vod

阿里云短视频SDK

## Requirements

- PHP 5.5+

## Installing

```shell
$ composer require "jimchen/aliyun-php-sdk-vod:^2.0"
```

## Usage

```php
use JimChen\AliyunVod\Client;
$client = new Client(
        $accessKeyId,
        $accessKeySecret,
        $regionId,
        $clientName,
        $debug,
        $connectionTimeout,
        $timeout,
        $cert,
        $options
);

$result = $client->getVideoInfo()
            ->withVideoId($videoId)
            ->request();
            
$result->isSuccess();
```

### In Laravel

```bash
php artisan vendor:publish --provider='JimChen\AliyunVod\LaravelProvider'
```

```php
$result = app('aliyun.vod')->getVideoInfo()
            ->withVideoId($videoId)
            ->request();

$result->isSuccess();
```

## License

Apache License 2.0
