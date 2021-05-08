<?php

namespace App;

class RedisHandler implements RedisStore
{
    private $redis = null;

    function __construct($host = "127.0.0.1", $port = 6379) {
        $this->redis = new \Redis();
        $this->redis->connect($host, $port);
    }

    public function set(string $key, string $value) : string {
        $this->redis->set($key, $value);
        return $this->get($key);
    }

    public function get(string $key) : string {
        return $this->redis->get($key);
    }

}
