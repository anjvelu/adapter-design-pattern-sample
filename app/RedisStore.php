<?php

namespace App;

interface RedisStore {

    public function set(string $key, string $value) : string;
    public function get(string $key) : string;
}