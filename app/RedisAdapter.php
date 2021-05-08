<?php

namespace App;

class RedisAdapter implements FileStore
{
    private $redis_store = null;

    function __construct(RedisStore $redis_store) {
        $this->redis_store = $redis_store;
    }

    public function write(string $file_name, string $data) : string {
        return $this->redis_store->set($file_name, $data);
    }

    public function read(string $file_name) : string {
        return $this->redis_store->get($file_name);
    }
}
