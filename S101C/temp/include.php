<?php require_once('mysql.class.php');/* 数据库配置*/  $db_config = array(		'DB_CONFIG' => array(        'DB_HOST'=>'localhost',          'DB_NAME' => 'emads_db',        'DB_USER' => 'root',         'DB_PWD' => '',         'DB_ENCODE'=>'utf8',    ));$db = new Mysql($db_config);?>