<?php
return array(
    //'配置项'=>'配置值'
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST'               =>  '127.0.0.1', // 服务器地址
    'DB_NAME'               =>  'think',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  'root',          // 密码
    'DB_PORT'               =>  '',        // 端口
    'DB_PREFIX'             =>  'tp_',    // 数据库表前缀
    TMPL_PARSE_STRING=>array(
        '__HOME__' => __ROOT__.'/Public/Home',
        '__ADMIN__' => __ROOT__.'/Public/Admin',
    )
);