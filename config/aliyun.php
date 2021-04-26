<?php

return [
    'sts' => [
        'key'    => env('ALIYUN_VOD_ACCESS_KEY_ID'),
        'secret' => env('ALIYUN_VOD_ACCESS_KEY_SECRET'),
        'name'   => env('ALIYUN_VOD_CLIENT_NAME'),
        'debug'  => env('ALIYUN_VOD_DEBUG', false),

//        'connection_timeout' => env('ALIYUN_VOD_CONNECTION_TIMEOUT'),
//        'timeout' => env('ALIYUN_VOD_TIMEOUT'),

        'cert' => [
            //
        ],
        'options' => [
            //
        ],
    ],
];
