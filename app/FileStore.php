<?php

namespace App;

interface FileStore {

    public function write(string $file_name, string $data) : string;
    public function read(string $file_name) : string;
}