<?php
//Get Heroku ClearDB connection information
$cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server   = $cleardb_url["us-cdbr-iron-east-05.cleardb.net"];
$cleardb_username = $cleardb_url["b2a4fadd12b347"];
$cleardb_password = $cleardb_url["d6ea0403"];
$cleardb_db       = substr($cleardb_url["path"],1);


$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'us-cdbr-iron-east-05.cleardb.net',
    'username' => 'b2a4fadd12b347',
    'password' => 'd6ea0403',
    'database' => 'heroku_c8a87aadafff651',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);