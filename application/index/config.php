<?php
//配置文件
return [
    // 应用调试模式
    'app_debug'              => true,
    // 应用Trace
    'app_trace'              => true,
    'log'					 => [
    	'type' => 'File',
    	'apart_level' => ['error', 'sqk'],
    ],
    'cache'                  => [
        // 驱动方式
        'type'   => 'File',
        // 缓存保存目录
        'path'   => APP_PATH . 'index/runtime/formcache/',
        // 缓存前缀
        'prefix' => '',
        // 缓存有效期 0表示永久缓存
        'expire' => 0,
    ]
];