<?php

// +----------------------------------------------------------------------
// | 缓存设置
// +----------------------------------------------------------------------

return [
    // 默认缓存驱动
    'default' => env('CACHE_TYPE', 'file'),

    // 缓存连接方式配置
    'stores'  => [
        'file'  => [
            // 驱动方式
            'type'       => 'File',
            // 缓存保存目录
            'path'       => '',
            // 缓存前缀
            'prefix'     => '',
            // 缓存有效期 0表示永久缓存
            'expire'     => 0,
            // 缓存标签前缀
            'tag_prefix' => 'tag:',
            // 序列化机制 例如 ['serialize', 'unserialize']
            'serialize'  => [],
        ],
        'redis' => [
            // 驱动方式
            'type'       => 'redis',
            // 服务器地址
            'host'       => env('REDIS_HOST'),
            // 服务器端口
            'port'       => env('REDIS_PORT'),
            // 服务器密碼
            'password'   => env('REDIS_PASSWORD')
        ],
    ],
];