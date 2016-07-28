<?php
return array(
	//'配置项'=>'配置值'
	// 'DEFAULT_MODULE'       => 'Home',
	// 'MODULE_ALLOW_LIST'    =>  array('Home'),
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'encounter', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'root', // 密码
	'DB_PORT'   => '3306', // 端口
	'DB_PREFIX' => 'db_', // 数据库表前缀
	'DB_FIELDTYPE_CHECK'=> true,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'=>false,        // 启用字段缓存
	'DB_CHARSET'=>'utf8',      // 数据库编码默认采用utf8
	'DB_DEPLOY_TYPE'=>0, // 数据库部署方式:0 集中式(单一服务器),1 分布式(主从服务器)
	'DB_RW_SEPARATE'=>false,       // 数据库读写是否分离 主从式有效
	'DB_MASTER_NUM'=>1, // 读写分离后 主服务器数量
	'DB_SQL_BUILD_CACHE'=>false, // 数据库查询的SQL创建缓存
	'DB_SQL_BUILD_QUEUE'=>'file',   // SQL缓存队列的缓存方式 支持 file xcache和apc
	'DB_SQL_BUILD_LENGTH'=>20, // SQL缓存的队列长度
	'USER_AUTH_KEY'=>'memberId',
	'LAYOUT_ON'=>true,
	'LAYOUT_NAME'=>'Layout/layout',
	'URL_MODEL'=>2,
	'URL_HTML_SUFFIX' =>'.html',
	'TOKEN_ON'=>true,  // 是否开启令牌验证
	'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true
);
