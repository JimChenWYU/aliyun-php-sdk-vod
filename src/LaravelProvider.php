<?php

namespace JimChen\AliyunVod;

use Illuminate\Support\ServiceProvider;

class LaravelProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('aliyun.vod', function () {
            return new Client(
                config('aliyun.vod.key'),
                config('aliyun.vod.secret'),
                config('aliyun.vod.region_id'),
                config('aliyun.vod.name'),
                config('aliyun.vod.debug', false),
                config('aliyun.vod.connection_timeout', 20),
                config('aliyun.vod.timeout', 20),
                config('aliyun.vod.cert'),
                config('aliyun.vod.options')
            );
        });
    }

    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                \dirname(__DIR__) . '/config/aliyun.php' => config_path('aliyun.php'),
            ], 'config');
        }
    }
}
