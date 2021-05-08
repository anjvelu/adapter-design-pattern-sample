<?php

require_once __DIR__ . '/vendor/autoload.php';
ini_set('display_errors', 1);

$file_handler = new App\FileHandler();
// $redis_handler = new App\RedisHandler();
// $file_handler = new App\RedisAdapter($redis_handler);
// ....

$file_handler->write('Name', 'Majid');
$data = $file_handler->read('Name');
var_dump($data);

// ....

// $redis_handler = new App\RedisHandler();
// $redis_handler->set('foo', 'baz');
// $data = $redis_handler->get('foo');
// var_dump($data);